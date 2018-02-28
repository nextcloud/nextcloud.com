<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

use Mautic\Api\Api;
use Mautic\Auth\ApiAuth;
use Mautic\Auth\OAuth;
use Mautic\MauticApi;
use Mautic\QueryBuilder\QueryBuilder;
use Mautic\QueryBuilder\WhereBuilder;

abstract class MauticApiTestCase extends \PHPUnit_Framework_TestCase
{
    protected $config = null;
    protected $skipPayloadAssertion = array();
    protected $testPayload = array();

    /** @var  Api */
    protected $api;

    public function setUp()
    {
        $this->testPayload = array();
    }

    protected function getAuth()
    {
        $this->config = include __DIR__.'/../local.config.php';
        $authMethod = isset($this->config['AuthMethod']) ? $this->config['AuthMethod'] : 'OAuth';

        if (file_exists(__DIR__.'/../local.tokens.php')) {
            $this->config = array_merge($this->config, include __DIR__.'/../local.tokens.php');
        }

        $apiAuth = new ApiAuth();
        $auth = $apiAuth->newAuth($this->config, $authMethod);
        if ($authMethod != 'BasicAuth') {
            if (empty($this->config['refreshToken']) && !$auth->isAuthorized()) {
                $this->assertTrue($authorized, 'Authorization failed. Check credentials in local.config.php.');
            } else {
                try {
                    $auth->validateAccessToken();
                } catch (\Exception $e) {
                    $this->assertTrue(false, $e->getMessage());
                }

                if ($auth->accessTokenUpdated()) {
                    $tokens = $auth->getAccessTokenData();
                    $tokens['accessToken'] = (isset($tokens['access_token'])) ? $tokens['access_token'] : null;
                    $tokens['accessTokenExpires'] = (isset($tokens['expires'])) ? $tokens['expires'] : null;
                    $tokens['refreshToken'] = (isset($tokens['refresh_token'])) ? $tokens['refresh_token'] : null;

                    file_put_contents(__DIR__.'/../local.tokens.php', '<?php return '.var_export($tokens, true).';');
                }
            }
        }

        return array($auth, $this->config['apiUrl']);
    }

    protected function getContext($context)
    {
        list($auth, $apiUrl) = $this->getAuth();

        $api = new MauticApi();

        return $api->newApi($context, $auth, $apiUrl);
    }

    protected function assertErrors($response, $failureMessage = '')
    {
        $message = '';
        if (isset($response['errors'])) {
            $messages = array();
            foreach ($response['errors'] as $error) {
                $messages[] = "{$error['message']}";
            }

            $message = implode("; ", $messages);
        } elseif (isset($response['error'])) {
            $message = (is_array($response['error']) ? $response['error']['message'] : $response['error']);
        }

        $this->assertTrue(empty($message), $message.$failureMessage);
    }

    protected function assertSuccess($response)
    {
        $this->assertFalse(empty($response['success']), 'Response does not contain success => true');
    }

    protected function assertPayload(
        $response,
        array $payload = array(),
        $isBatch = false,
        $idColumn = 'id',
        $callback = null
    ) {
        $this->assertErrors($response);

        if ($idColumn) {
            if ($isBatch) {
                $this->assertFalse(
                    empty($response[$this->api->listName()]),
                    $this->api->listName().' was not found in the response: '.var_export($response, true)
                );
                $this->assertFalse(
                    empty($response[$this->api->listName()][0][$idColumn]),
                    '['.$this->api->listName().'][0]['.$idColumn.'] is empty: '.var_export($response, true)
                );
            } else {
                $this->assertFalse(
                    empty($response[$this->api->itemName()][$idColumn]),
                    '['.$this->api->itemName().']['.$idColumn.']  is empty: '.var_export($response, true)
                );
            }
        }

        if ($isBatch) {
            $batch = $payload;
            foreach ($batch as $batchKey => $payload) {
                $item = $response[$this->api->listName()][$batchKey];
                foreach ($payload as $itemProp => $itemVal) {
                    $this->assertPayloadItem($itemProp, $callback, $itemVal, $item);
                }
            }

            $this->assertEquals($isBatch, count($response[$this->api->listName()]));
        } else {
            if (empty($payload)) {
                $payload = $this->testPayload;
            }
            foreach ($payload as $itemProp => $itemVal) {
                $this->assertPayloadItem($itemProp, $callback, $itemVal, $response[$this->api->itemName()]);
            }
        }
    }

    protected function assertPayloadItem($itemProp, $callback, $itemVal, $item)
    {
        if (in_array($itemProp, $this->skipPayloadAssertion)) {
            return;
        }

        if (is_callable($callback)) {
            $callback($itemProp, $itemVal, $item);
        } else {
            $this->assertTrue(
                array_key_exists($itemProp, $item),
                'The ["'.$this->api->itemName().'" => "'.$itemProp.'"] doesn\'t exist in the response: '.var_export(
                    $item,
                    true
                )
            );

            $this->assertSame($item[$itemProp], $itemVal, '>>> '.$itemProp.':');
        }
    }

    protected function standardTestGetListOfSpecificIds($callback = null)
    {
        // Create some items first
        $itemIds = array();
        for ($i = 0; $i <= 2; $i++) {
            $response = $this->api->create($this->testPayload);
            $this->assertErrors($response);
            $itemIds[] = $response[$this->api->itemName()]['id'];
        }

        if (is_callable($callback)) {
            // Allow support to make additional tests based on created associations with this item that
            // may not have create/edit endpoints
            $callback($response);
        }

        $search = 'ids:'.implode(',', $itemIds);
        $response = $this->api->getList($search);
        $this->assertErrors($response);
        $this->assertEquals(count($itemIds), $response['total']);

        foreach ($response[$this->api->listName()] as $item) {
            $this->assertTrue(in_array($item['id'], $itemIds));
            $this->api->delete($item['id']);
            $this->assertErrors($response);
        }
    }

    protected function standardTestGetList()
    {
        $response = $this->api->getList();
        $this->assertErrors($response);
        $this->assertTrue(isset($response['total']));
        $this->assertTrue(isset($response[$this->api->listName()]), var_export($response, true));

        if (!empty($this->testPayload)) {
            reset($this->testPayload);
            $fieldKey = key($this->testPayload);
            $qb = new QueryBuilder();
            $qb->getWhereBuilder()->isNotEmpty($fieldKey);

            $response = $this->api->getCustomList($qb);
            $this->assertErrors($response);
            $this->assertTrue(isset($response['total']));
            $this->assertTrue(isset($response[$this->api->listName()]), var_export($response, true));
            $first = reset($response[$this->api->listName()]);

            if (isset($first['fields']) && isset($first['fields']['all'])) {
                $this->assertTrue(
                    !$response['total'] || !empty($first['fields']['all'][$fieldKey]),
                    $fieldKey.'; '.var_export($response, true)
                );
            } else {
                $this->assertTrue(
                    !$response['total'] || !empty($first[$fieldKey]),
                    $fieldKey.'; '.var_export($response, true)
                );
            }
        }
    }

    protected function standardTestCreateGetAndDelete(array $payload = null)
    {
        if (empty($payload)) {
            $payload = $this->testPayload;
        }

        // Create item
        $response = $this->api->create($payload);
        $this->assertErrors($response);
        $this->assertPayload($response, $payload);

        // GET item
        $response = $this->api->get($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
        $this->assertPayload($response, $payload);

        // Delete item
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    protected function standardTestBatchEndpoints(array $batch = null, $callback = null)
    {
        if (method_exists($this, 'setUpPayloadClass')) {
            $this->setUpPayloadClass();
        }

        if (null == $batch) {
            $batch = array(
                $this->testPayload,
                $this->testPayload,
                $this->testPayload,
            );
        }

        // Create batch
        $createResponse = $this->api->createBatch($batch);
        $this->assertPayload($createResponse, $batch, 3);

        // Add new IDs
        $ids = array();
        $counter = 0;
        foreach ($createResponse[$this->api->listName()] as $item) {
            $batch[$counter]['id'] = $item['id'];
            $ids[] = $item['id'];

            $counter++;
        }

        if (is_callable($callback)) {
            $callback($createResponse, $batch, 'create');
        }

        // Edit batch
        $editResponse = $this->api->editBatch($batch);
        $this->assertPayload($editResponse, $batch, 3);
        if (is_callable($callback)) {
            $callback($editResponse, $batch, 'edit');
        }

        // Delete batch
        $deleteResponse = $this->api->deleteBatch($ids);
        $this->assertPayload($deleteResponse, $batch, 3, false, true);
        if (is_callable($callback)) {
            $callback($deleteResponse, $batch, 'delete');
        }

        if (method_exists($this, 'clearPayloadItems')) {
            $this->clearPayloadItems();
        }
    }

    public function standardTestEditPatch(array $editTo)
    {
        $response = $this->api->edit(10000, $this->testPayload);

        //there should be an error as the item shouldn't exist
        $this->assertTrue(isset($response['error']), $response['error']['message']);

        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);

        $response = $this->api->edit($response[$this->api->itemName()]['id'], $editTo);
        $this->assertPayload($response, $editTo);

        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function standardTestEditPut()
    {
        $response = $this->api->edit(10000, $this->testPayload, true);
        $this->assertPayload($response);

        //now delete the category
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testSearchCommands()
    {
        $commands = $this->api->getSearchCommands();

        foreach ($commands as $command) {
            $this->assertTrue($this->api->hasSearchCommand($command));
        }

        $this->assertFalse($this->api->hasSearchCommand('this:command:should:not:exist'));
    }
}
