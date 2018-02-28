<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class UsersTest extends MauticApiTestCase
{
    protected $skipPayloadAssertion = array('plainPassword', 'role');

    public function setUp() {
        $this->api = $this->getContext('users');
        $this->testPayload = $this->getUniqueUser();
    }

    protected function generateRandomUsername($length = 8) {
        $x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return 'API_'.substr(str_shuffle(str_repeat($x, ceil($length / strlen($x)))), 1, $length);
    }

    protected function getUniqueUser() {
        $username = $this->generateRandomUsername();
        return array(
            'username' => $username,
            'firstName' => 'API',
            'lastName' => 'Test',
            'email' => $username.'@email.com',
            'plainPassword' => array(
                'password' => 'topSecret007',
                'confirm' => 'topSecret007',
            ),
            'role' => 1, // Should exist in every Mautic instance
        );
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testGetListOfSpecificIds()
    {
        // Create some items first
        $itemIds = array();
        $response = $this->api->create($this->testPayload);
        $this->assertErrors($response);
        $itemIds[] = $response[$this->api->itemName()]['id'];
        $user2 = $this->getUniqueUser();
        $response = $this->api->create($user2);
        $this->assertErrors($response);
        $itemIds[] = $response[$this->api->itemName()]['id'];

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

    public function testCreateGetAndDelete()
    {
        $this->standardTestCreateGetAndDelete();
    }

    public function testEditPatch()
    {
        $editTo = array(
            'lastName' => 'test2',
        );
        $this->standardTestEditPatch($editTo);
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }

    public function testGetSelf()
    {
        $response = $this->api->getSelf();
        $this->assertErrors($response);
    }

    public function testGetSelfPermissionsString()
    {
        $response = $this->api->getSelf();
        $this->assertErrors($response);

        $permission = 'user:users:create';
        $response = $this->api->checkPermission($response['id'], $permission);
        $this->assertErrors($response);
        $this->assertTrue(isset($response[$permission]));
    }

    public function testGetSelfPermissionsArray()
    {
        $response = $this->api->getSelf();
        $this->assertErrors($response);

        $permission = array('user:users:create', 'user:users:edit');
        $response = $this->api->checkPermission($response['id'], $permission);
        $this->assertErrors($response);
        foreach ($permission as $p) {
            $this->assertTrue(isset($response[$p]));
        }
    }

    public function testBatchEndpoints()
    {
        $batch = array(
            $this->getUniqueUser(),
            $this->getUniqueUser(),
            $this->getUniqueUser(),
        );

        $this->standardTestBatchEndpoints($batch);
    }
}
