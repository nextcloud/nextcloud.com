<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class StagesTest extends MauticApiTestCase
{
    public function setUp() {
        $this->api = $this->getContext('stages');
        $this->testPayload = array(
            'name' => 'test',
        );
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

    public function testEditPatch()
    {
        $editTo = array(
            'name' => 'test2',
        );
        $this->standardTestEditPatch($editTo);
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }

    public function testAddAndRemove()
    {
        // Create contact
        $contactsContext = $this->getContext('contacts');
        $response = $contactsContext->create(array('firstname' => 'API stages test'));
        $this->assertErrors($response);
        $contact = $response['contact'];

        // Create stage
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);
        $stage = $response[$this->api->itemName()];

        // Add contact to the stage
        $response = $this->api->addContact($stage['id'], $contact['id']);
        $this->assertErrors($response);
        $this->assertSuccess($response);

        // Remove the contact from the stage
        $response = $this->api->removeContact($stage['id'], $contact['id']);
        $this->assertErrors($response);
        $this->assertSuccess($response);

        // Delete the contact and the stage
        $response = $contactsContext->delete($contact['id']);
        $this->assertErrors($response);
        $response = $this->api->delete($stage['id']);
        $this->assertErrors($response);
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints();
    }

    public function testBCEndpoints()
    {
        $this->api->bcTesting = array('addContact', 'removeContact');
        $this->testAddAndRemove();
        $this->api->bcTesting = false;
    }
}
