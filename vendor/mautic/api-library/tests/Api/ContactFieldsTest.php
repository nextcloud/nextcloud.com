<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class ContactFieldsTest extends MauticApiTestCase
{
    protected $prefix = '';

    public function setUp()
    {
        $this->api = $this->getContext('contactFields');
        $this->testPayload = array(
            'label' => $this->prefix.'API test field',
            'type' => 'text',
        );
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testCreateGetAndDelete()
    {
        $this->standardTestCreateGetAndDelete();
    }

    public function testCreateGetAndDeleteOfLookupField()
    {
        $lookupField = array(
            'label' => $this->prefix.'API test lookup field',
            'type' => 'lookup',
            'properties' => array(
                'list' => array(
                    array('label' => 'Mr', 'value' => 'mr'),
                    array('label' => 'Mrs', 'value' => 'mrs'),
                    array('label' => 'Miss', 'value' => 'miss'),
                )
            )
        );

        $this->standardTestCreateGetAndDelete($lookupField);
    }

    public function testBooleanField()
    {
        // Create a testing contact
        $contactContext = $this->getContext('contacts');
        $response = $contactContext->create(array('firstname' => 'Boolean Field', 'lastname' => 'API test'));
        $this->assertErrors($response);
        $contact = $response['contact'];


        $possibleValues = array(1 => 1, 0 => 0, 'yes' => 1, 'no' => 0, 'true' => 1, 'false' => 0);
        $boolField = array(
            'label' => $this->prefix.'API test Boolean field',
            'type' => 'boolean',
            'properties' => array(
                'no' => 'No',
                'yes' => 'Yes'
            )
        );

        // Create the Boolean field
        $response = $this->api->create($boolField);
        $this->assertErrors($response);
        $field = $response[$this->api->itemName()];

        // Test if the Boolean value gets updated with test values
        foreach ($possibleValues as $value => $boolValue) {
            $response = $contactContext->edit($contact['id'], array($field['alias'] => $value));
            $this->assertErrors($response);
            $this->assertTrue(isset($response['contact']['fields']['all'][$field['alias']]), $field['alias'].' does not exist in the field list');
            $this->assertEquals($response['contact']['fields']['all'][$field['alias']], $boolValue);
        }

        // Clean after youself
        $response = $this->api->delete($field['id']);
        $this->assertErrors($response);
        $response = $contactContext->delete($contact['id']);
        $this->assertErrors($response);
    }

    public function testDefaultFieldValue()
    {
        $defaultValue = 'little kitten';

        $fieldPayload = $this->testPayload;
        $fieldPayload['defaultValue'] = $defaultValue;

        // Create the field
        $response = $this->api->create($fieldPayload);
        $this->assertPayload($response);
        $field = $response[$this->api->itemName()];

        // Create a testing contact
        $contactContext = $this->getContext('contacts');
        $response = $contactContext->create(array('firstname' => 'Default Value', 'lastname' => 'API test'));
        $this->assertErrors($response);
        $this->assertTrue(isset($response['contact']['fields']['all'][$field['alias']]), $field['alias'].' does not exist in the field list');
        $this->assertEquals($response['contact']['fields']['all'][$field['alias']], $defaultValue);
        $contact = $response['contact'];

        // Clean after youself
        $response = $this->api->delete($field['id']);
        $this->assertErrors($response);
        $response = $contactContext->delete($contact['id']);
        $this->assertErrors($response);
    }

    public function testEditPatch()
    {
        $editTo = array(
            'label' => 'test2',
        );
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
