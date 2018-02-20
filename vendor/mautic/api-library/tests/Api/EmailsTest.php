<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class EmailsTest extends MauticApiTestCase
{
    protected $skipPayloadAssertion = array('lists');

    public function setUp() {
        $this->api = $this->getContext('emails');
        $this->testPayload = array(
            'name' => 'test',
            'subject' => 'API test email',
            'customHtml' => '<h1>Hi there!</h1>',
            'emailType' => 'list',
            'dynamicContent' => array(
                array(
                    'tokenName' => 'test content name',
                    'content' => 'Some default <strong>content</strong>',
                    'filters' => array(
                        array(
                            'content' => 'Variation 1',
                            'filters' => array()
                        ),
                        array(
                            'content' => 'Variation 2',
                            'filters' => array(
                                array(
                                    'glue' => 'and',
                                    'field' => 'city',
                                    'object' => 'lead',
                                    'type' => 'text',
                                    'filter' => 'Prague',
                                    'display' => null,
                                    'operator' => '=',
                                ),
                                array(
                                    'glue' => 'and',
                                    'field' => 'email',
                                    'object' => 'lead',
                                    'type' => 'email',
                                    'filter' => 'Prague',
                                    'display' => null,
                                    'operator' => '!empty',
                                )
                            )
                        )
                    )
                ),
                array(
                    'tokenName' => 'test content name2',
                    'content' => 'Some default <strong>content2</strong>',
                    'filters' => array(
                        array(
                            'content' => 'Variation 3',
                            'filters' => array()
                        ),
                        array(
                            'content' => 'Variation 4',
                            'filters' => array(
                                array(
                                    'glue' => 'and',
                                    'field' => 'city',
                                    'object' => 'lead',
                                    'type' => 'text',
                                    'filter' => 'Raleigh',
                                    'display' => null,
                                    'operator' => '=',
                                )
                            )
                        )
                    )
                )
            )
        );
    }

    protected function setUpPayloadClass()
    {
        $segmentApi = $this->getContext('segments');
        $response   = $segmentApi->create(array('name' => 'test'));
        $this->assertErrors($response);
        $segment    = $response['list'];

        // Add testing segment to the email
        $this->testPayload['lists'] = array($segment['id']);
    }

    protected function clearPayloadItems()
    {
        $segmentApi = $this->getContext('segments');
        $response   = $segmentApi->delete($this->testPayload['lists'][0]);
        $this->assertErrors($response);
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testGetListOfSpecificIds()
    {
        $this->setUpPayloadClass();
        $this->standardTestGetListOfSpecificIds();
        $this->clearPayloadItems();
    }

    public function testCreateGetAndDelete()
    {
        $this->setUpPayloadClass();

        // Test Create
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);
        $this->assertSame($response[$this->api->itemName()]['lists'][0]['id'], $this->testPayload['lists'][0]);
        $this->assertequals(count($response[$this->api->itemName()]['lists']), 1);

        // Test Get
        $response = $this->api->get($response[$this->api->itemName()]['id']);
        $this->assertPayload($response);

        // Test Delete
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
        $this->clearPayloadItems();
    }

    public function testEditPatch()
    {
        $response = $this->api->edit(10000, $this->testPayload);

        //there should be an error as the email shouldn't exist
        $this->assertTrue(isset($response['error']), $response['error']['message']);

        // Unset the emailType, 'template' must be the default value
        unset($this->testPayload['emailType']);

        $response = $this->api->create($this->testPayload);
        $this->assertErrors($response);
        $this->assertSame($response[$this->api->itemName()]['emailType'], 'template');

        $response = $this->api->edit(
            $response[$this->api->itemName()]['id'],
            array(
                'name' => 'test2',
                'body' => 'test2'
            )
        );

        $this->assertErrors($response);

        //now delete the email
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testEditPut()
    {
        $segmentApi = $this->getContext('segments');
        $response   = $segmentApi->create(array('name' => 'test'));
        $this->assertErrors($response);
        $segment1   = $response['list'];

        // Add testing segment to the email
        $this->testPayload['lists'] = array($segment1['id']);

        $response = $this->api->create($this->testPayload);
        $this->assertErrors($response);
        $email = $response['email'];

        $response   = $segmentApi->create(array('name' => 'test2'));
        $this->assertErrors($response);
        $segment2   = $response['list'];
        $email['lists'] = array($segment2['id']);

        $response = $this->api->edit($email['id'], $email, true);
        $this->assertPayload($response);
        $this->assertSame($response[$this->api->itemName()]['lists'][0]['id'], $segment2['id']);
        $this->assertequals(count($response[$this->api->itemName()]['lists']), 1);

        //now delete the email
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
        $response = $segmentApi->delete($segment1['id']);
        $this->assertErrors($response);
        $response = $segmentApi->delete($segment2['id']);
        $this->assertErrors($response);
    }

    public function testSendToSegment()
    {
        $segmentApi = $this->getContext('segments');
        $contactApi = $this->getContext('contacts');

        // Create a test segment
        $response   = $segmentApi->create(array('name' => 'test'));
        $this->assertErrors($response);
        $segment    = $response['list'];

        // Add testing segment to the email
        $this->testPayload['lists'] = array($segment['id']);
        $this->testPayload['subject'] .= ' - SendToSegment test';

        // Create a test email with the test segment
        $response   = $this->api->create($this->testPayload);
        $this->assertErrors($response);
        $email      = $response['email'];

        // Create a test contact
        $response   = $contactApi->create(array('email' => $this->config['testEmail']));
        $this->assertErrors($response);
        $contact    = $response['contact'];

        // Add contact to the segment
        $segmentApi->addContact($segment['id'], $contact['id']);
        $this->assertErrors($response);

        // Finally send the email to the segment
        $response = $this->api->send($email['id']);
        $this->assertErrors($response);
        $this->assertSuccess($response);
        $this->assertequals($response['sentCount'], 1);

        // Clean
        $response = $this->api->delete($email['id']);
        $this->assertErrors($response);
        $response = $segmentApi->delete($segment['id']);
        $this->assertErrors($response);
        $response = $contactApi->delete($contact['id']);
        $this->assertErrors($response);
    }

    public function testSendToContact()
    {
        $contactApi = $this->getContext('contacts');

        // Change the type to template so we don't have to create a list
        $this->testPayload['emailType'] = 'template';
        $this->testPayload['subject'] .= ' - SendToContact test';

        // Create a test email
        $response   = $this->api->create($this->testPayload);
        $this->assertErrors($response);
        $email      = $response['email'];

        // Create a test contact
        $response   = $contactApi->create(array('email' => $this->config['testEmail']));
        $this->assertErrors($response);
        $contact    = $response['contact'];

        // Finally send the email to the contact
        $response = $this->api->sendToContact($email['id'], $contact['id']);
        $this->assertErrors($response);
        $this->assertSuccess($response);

        // Clean
        $response = $this->api->delete($email['id']);
        $this->assertErrors($response);
        $response = $contactApi->delete($contact['id']);
        $this->assertErrors($response);
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints();
    }

    public function testBCEndpoints()
    {
        $this->api->bcTesting = array('sendToContact');
        $this->testSendToContact();
        $this->api->bcTesting = false;
    }
}
