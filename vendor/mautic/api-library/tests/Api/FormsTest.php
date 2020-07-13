<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class FormsTest extends MauticApiTestCase
{
    public function setUp() {
        $this->api = $this->getContext('forms');
        $this->testPayload = array(
            'name' => 'test',
            'formType' => 'standalone',
            'description' => 'API test',
            'fields' => array(
                array(
                    'label' => 'field name',
                    'type' => 'text'
                )
            ),
            'actions' => array(
                array(
                    'name' => 'action name',
                    'description' => 'action desc',
                    'type' => 'lead.pointschange',
                    'properties' => array(
                        'operator' => 'plus',
                        'points' => 2
                    )
                )
            )
        );
    }

    protected function assertPayload($response, array $payload = array(), $isBatch = false, $idColumn = 'id', $callback = null)
    {
        parent::assertPayload($response, $payload, $isBatch, $idColumn, array($this, 'validateComponentsPayload'));
    }

    protected function validateComponentsPayload($itemProp, $itemVal, $item)
    {
        $this->assertFalse(empty($item['fields']), 'The form field array is empty: '.var_export($item, true));
        $this->assertFalse(empty($item['actions']), 'The form action array is empty: '.var_export($item, true));

        switch ($itemProp) {
            case 'fields':
                end($itemVal);
                $key = key($itemVal);
                $this->assertSame($itemVal[$key]['label'], $item['fields'][$key]['label']);
                break;
            case 'actions':
                end($itemVal);
                $key = key($itemVal);
                $this->assertSame($itemVal[$key]['name'], $item['actions'][$key]['name']);
                break;
            default:
                $this->assertSame($item[$itemProp], $itemVal);
        }
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testGetListOfSpecificIds()
    {
        $this->standardTestGetListOfSpecificIds();
    }

    public function testCreateGetAndDelete()
    {
        $this->standardTestCreateGetAndDelete();
    }

    public function testDeleteFields()
    {
        $fieldIds   = array();
        $response   = $this->api->create($this->testPayload);
        $this->assertErrors($response);

        foreach ($response[$this->api->itemName()]['fields'] as $field) {
            $fieldIds[] = $field['id'];
        }

        $response = $this->api->deleteFields($response[$this->api->itemName()]['id'], $fieldIds);
        $this->assertErrors($response);
        $this->assertTrue(empty($response[$this->api->itemName()]['fields']), 'Fields were not deleted');

        //now delete the form
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testDeleteActions()
    {
        $actionIds  = array();
        $response   = $this->api->create($this->testPayload);
        $this->assertErrors($response);

        foreach ($response[$this->api->itemName()]['actions'] as $action) {
            $actionIds[] = $action['id'];
        }

        $response = $this->api->deleteActions($response[$this->api->itemName()]['id'], $actionIds);
        $this->assertErrors($response);
        $this->assertTrue(empty($response[$this->api->itemName()]['actions']), 'Actions were not deleted');

        //now delete the form
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testEditPatch()
    {
        $response   = $this->api->edit(10000, $this->testPayload);

        //there should be an error as the form shouldn't exist
        $this->assertTrue(isset($response['error']), $response['error']['message']);

        $response = $this->api->create($this->testPayload);
        $this->assertErrors($response);

        $lastField = array_pop($response[$this->api->itemName()]['fields']);
        $lastAction = array_pop($response[$this->api->itemName()]['actions']);
        $lastField['label'] = 'edited field';
        $lastAction['name'] = 'edited action';

        $response = $this->api->edit(
            $response[$this->api->itemName()]['id'],
            array(
                'name' => 'test2',
                'formType' => 'standalone',
                'fields' => array(
                    $lastField
                ),
                'actions' => array(
                    $lastAction
                )
            )
        );

        $this->assertErrors($response);
        $this->assertTrue(!empty($response[$this->api->itemName()]['fields']), 'The form field array is empty.');
        $this->assertTrue(!empty($response[$this->api->itemName()]['actions']), 'The form action array is empty.');
        $lastField = array_pop($response[$this->api->itemName()]['fields']);
        $lastAction = array_pop($response[$this->api->itemName()]['actions']);
        $this->assertSame($lastField['label'], 'edited field');
        $this->assertSame($lastAction['name'], 'edited action');

        //now delete the form
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }

    public function testFieldAndActionDeleteViaPut()
    {
        // Firstly create a form with fields
        $response = $this->api->edit(10000, $this->testPayload, true);
        $this->assertErrors($response);

        // Remove fields and actions
        unset($response[$this->api->itemName()]['fields']);
        unset($response[$this->api->itemName()]['actions']);

        // Edit the same entitiy without the fields and actions
        $response = $this->api->edit(
            $response[$this->api->itemName()]['id'],
            $response[$this->api->itemName()],
            true
        );

        $this->assertErrors($response);
        $this->assertTrue(empty($response[$this->api->itemName()]['fields']), 'Fields were not deleted via PUT request');
        $this->assertTrue(empty($response[$this->api->itemName()]['actions']), 'Actions were not deleted via PUT request');

        //now delete the form
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints(null, function ($response, &$batch, $action) {
            switch ($action) {
                case 'create':
                    foreach ($batch as &$item) {
                        unset($item['fields'], $item['actions']);
                    }
                    break;
            }
        });
    }
}
