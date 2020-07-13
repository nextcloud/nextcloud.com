<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class DevicesTest extends MauticApiTestCase
{
    protected $skipPayloadAssertion = array('lead');

    public function setUp() {
        $this->api = $this->getContext('devices');
        $this->testPayload = array(
            'device' => 'desktop',
            'deviceOsName' => 'Ubuntu',
            'deviceOsShortName' => 'UBT',
            'deviceOsPlatform' => 'x64',
        );

        // Create a contact for test
        $contactApi = $this->getContext('contacts');
        $response = $contactApi->create(array('firstname' => 'Device API test'));
        $this->assertErrors($response);
        $this->testPayload['lead'] = $response['contact']['id'];
    }

    public function tearDown() {
        // Delete a contact from test
        $this->api = $this->getContext('contacts');
        $response = $this->api->delete($this->testPayload['lead']);
        $this->assertErrors($response);
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
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);

        // Test get contact devices endpoint
        $contactContext = $this->getContext('contacts');
        $responseDevices = $contactContext->getContactDevices($this->testPayload['lead']);
        $this->assertErrors($responseDevices);
        $this->assertEquals($responseDevices['total'], 1);
        $this->assertFalse(empty($responseDevices['devices'][0]['id']));
        $this->assertEquals($responseDevices['devices'][0]['id'], $response[$this->api->itemName()]['id']);

        $response = $this->api->get($response[$this->api->itemName()]['id']);
        $this->assertPayload($response);

        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testEditPatch()
    {
        $editTo = array(
            'deviceOsName' => 'Edubuntu',
        );
        $this->standardTestEditPatch($editTo);
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints();
    }
}
