<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

use Mautic\Api\CampaignEvents;

class CampaignsTest extends MauticApiTestCase
{
    /** @var  CampaignEvents */
    protected $eventApi;

    protected $requiredItems = array(
        'segments' => array(
            'item' => 'list',
            'payload' => array(
                'name' => 'Company API test'
            )
        ),
        'dynamicContents' => array(
            'item' => 'dynamicContent',
            'payload' => array(
                'name' => 'Company API test',
                'content' => 'Company API test'
            )
        ),
        'emails' => array(
            'item' => 'email',
            'payload' => array(
                'name' => 'Company API test',
                'body' => 'Company API test'
            )
        ),
        'companies' => array(
            'item' => 'company',
            'payload' => array(
                'companyname' => 'Company API test'
            )
        )
    );

    protected $skipPayloadAssertion = array('events', 'forms', 'lists', 'canvasSettings', 'dateModified', 'dateAdded');

    public function setUp()
    {
        $this->api      = $this->getContext('campaigns');
        $this->eventApi = $this->getContext('campaignEvents');

        $this->testPayload = array(
            'name' => 'test',
            'description' => 'Created via API',
            'events' => array(
                array(
                    'id' => 'new_43', // Event ID will be replaced on /new
                    'name' => 'DWC event test',
                    'description' => 'API test',
                    'type' => 'dwc.decision',
                    'eventType' => 'decision',
                    'order' => 1,
                    'properties' => array(
                        'dwc_slot_name' => 'dwc',
                        'dynamicContent' => 1, // Create DWC first
                    ),
                    'triggerDate' => null,
                    'triggerInterval' => 0,
                    'triggerIntervalUnit' => null,
                    'triggerMode' => null,
                    'children' => array(
                        'new_44', // Event ID will be replaced on /new
                        'new_55', // Event ID will be replaced on /new
                    ),
                    'parent' => null,
                    'decisionPath' => null,
                ),
                array(
                    'id' => 'new_44', // Event ID will be replaced on /new
                    'name' => 'Send email',
                    'description' => 'API test',
                    'type' => 'email.send',
                    'eventType' => 'action',
                    'order' => 2,
                    'properties' => array(
                        'email' => 1, // Create email first
                        'email_type' => 'transactional',
                    ),
                    'triggerDate' => null,
                    'triggerInterval' => 1,
                    'triggerIntervalUnit' => 'd',
                    'triggerMode' => 'interval',
                    'children' => array(),
                    'parent' => 'new_43', // Event ID will be replaced on /new
                    'decisionPath' => 'yes',
                ),
                array(
                    'id' => 'new_55', // Event ID will be replaced on /new
                    'name' => 'Add to company action',
                    'description' => 'API test',
                    'type' => 'lead.addtocompany',
                    'eventType' => 'action',
                    'order' => 2,
                    'properties' => array(
                        'company' => '10', // Create company first
                    ),
                    'triggerDate' => null,
                    'triggerInterval' => 1,
                    'triggerIntervalUnit' => 'd',
                    'triggerMode' => 'interval',
                    'children' => array(),
                    'parent' => 'new_43', // Event ID will be replaced on /new
                    'decisionPath' => 'no',
                )
            ),
            'forms' => array(),
            'lists' => array(
                array(
                    'id' => 1 // Create the list first
                )
            ),
            'canvasSettings' => array(
                'nodes' => array(
                    array(
                        'id' => 'new_43', // Event ID will be replaced on /new
                        'positionX' => '650',
                        'positionY' => '189',
                    ),
                    array(
                        'id' => 'new_44', // Event ID will be replaced on /new
                        'positionX' => '433',
                        'positionY' => '348',
                    ),
                    array(
                        'id' => 'new_55', // Event ID will be replaced on /new
                        'positionX' => '750',
                        'positionY' => '411',
                    ),
                    array(
                        'id' => 'lists',
                        'positionX' => '629',
                        'positionY' => '65',
                    ),
                ),
                'connections' => array(
                    array(
                        'sourceId' => 'lists',
                        'targetId' => 'new_43', // Event ID will be replaced on /new
                        'anchors' => array(
                            'source' => 'leadsource',
                            'target' => 'top',
                        )
                    ),
                    array(
                        'sourceId' => 'new_43', /// Event ID will be replaced on /new
                        'targetId' => 'new_44', // Event ID will be replaced on /new
                        'anchors' => array(
                            'source' => 'yes',
                            'target' => 'top',
                        ),
                    ),
                    array(
                        'sourceId' => 'new_43', // Event ID will be replaced on /new
                        'targetId' => 'new_55', // Event ID will be replaced on /new
                        'anchors' => array(
                            'source' => 'no',
                            'target' => 'top',
                        ),
                    )
                )
            )
        );
    }

    public function setUpPayloadClass() {
        // Create items used in the test campaign payload.
        foreach ($this->requiredItems as $context => &$data) {
            $response = $this->getContext($context)->create($data['payload']);
            $this->assertErrors($response);
            $data['payload'] = $response[$data['item']];
        }

        $this->testPayload['events'][0]['properties']['dynamicContent'] = $this->requiredItems['dynamicContents']['payload']['id'];
        $this->testPayload['events'][1]['properties']['email'] = $this->requiredItems['emails']['payload']['id'];
        $this->testPayload['events'][2]['properties']['company'] = $this->requiredItems['companies']['payload']['id'];
        $this->testPayload['lists'] = array(array('id' => $this->requiredItems['segments']['payload']['id']));
    }

    public function clearPayloadItems() {
        // Delete items used in the test campaign payload.
        foreach ($this->requiredItems as $context => &$data) {
            $response = $this->getContext($context)->delete($data['payload']['id']);
            $this->assertErrors($response);
        }
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testGetListOfSpecificIds()
    {
        $this->setUpPayloadClass();
        $this->standardTestGetListOfSpecificIds(array($this, 'testGetListOfSpecificEventIds'));
        $this->clearPayloadItems();
    }

    public function testCreateGetAndDelete()
    {
        $this->setUpPayloadClass();
        $this->standardTestCreateGetAndDelete();
        $this->clearPayloadItems();
    }

    public function testEditPatch()
    {
        $response  = $this->api->edit(10000, $this->testPayload);

        //there should be an error as the campaign shouldn't exist
        $this->assertTrue(isset($response['error']), $response['error']['message']);

        $this->setUpPayloadClass();
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);

        // Modify the crated campaign
        $campaign = $response[$this->api->itemName()];
        $campaign['name'] = 'test2';

        foreach ($campaign['events'] as &$event) {
            $event['name'] = 'Event Name Modified';
        }

        $response = $this->api->edit($campaign['id'], $campaign);
        $this->assertPayload($response, $campaign);

        foreach ($response[$this->api->itemName()]['events'] as $event) {
            $this->assertEquals($event['name'], 'Event Name Modified');
        }

        //now delete the campaign
        $response = $this->api->delete($campaign['id']);
        $this->assertErrors($response);
        $this->clearPayloadItems();
    }

    public function testEditPut()
    {
        $this->setUpPayloadClass();
        $this->standardTestEditPut();
        $this->clearPayloadItems();
    }

    public function testAddAndRemove()
    {
        $this->setUpPayloadClass();

        // Create contact
        $contactsContext = $this->getContext('contacts');
        $response = $contactsContext->create(array('firstname' => 'API campagin test'));
        $this->assertErrors($response);
        $contact = $response['contact'];

        // Create campaign
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);
        $campaign = $response[$this->api->itemName()];

        // Add the contact to the campaign
        $response = $this->api->addContact($campaign['id'], $contact['id']);
        $this->assertErrors($response);

        // Test get contact campaigns API endpoint
        $contactContext = $this->getContext('contacts');
        $response = $contactContext->getContactCampaigns($contact['id']);
        $this->assertErrors($response);
        $this->assertEquals($response['total'], 1);
        $this->assertFalse(empty($response['campaigns']));

        // Test get campaign contacts API endpoint
        $response = $this->api->getContacts($campaign['id']);
        $this->assertErrors($response);
        $this->assertEquals($response['total'], 1);
        $this->assertEquals(count($response['contacts']), 1);
        $this->assertEquals($response['contacts'][0]['campaign_id'], $campaign['id']);
        $this->assertEquals($response['contacts'][0]['lead_id'], $contact['id']);

        // Remove the contact from the campaign
        $response = $this->api->removeContact($campaign['id'], $contact['id']);
        $this->assertErrors($response);

        // Delete the contact and the campaign
        $response = $contactsContext->delete($contact['id']);
        $this->assertErrors($response);
        $response = $this->api->delete($campaign['id']);
        $this->assertErrors($response);
        $this->clearPayloadItems();
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints(null, function ($response, &$batch, $action) {
            switch ($action) {
                case 'create':
                    foreach ($batch as &$item) {
                        unset($item['events'], $item['canvasSettings']);
                    }
                    break;
            }
        });
    }

    public function testEventAndSourceDeleteViaPut()
    {
        $this->setUpPayloadClass();
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);

        // Remove the last event
        array_pop($response[$this->api->itemName()]['events']);

        // Create a new list
        $segmentResponse = $this->getContext('segments')->create(
            array(
                'name' => 'second campaign test segment'
            )
        );
        $this->assertErrors($segmentResponse);

        // Substitude another segment
        $newSegmentsArray = array($segmentResponse['list']);
        $response[$this->api->itemName()]['lists'] = $newSegmentsArray;

        // Edit the same entitiy without the fields and actions
        $response = $this->api->edit(
            $response[$this->api->itemName()]['id'],
            $response[$this->api->itemName()],
            true
        );
        $this->assertPayload($response);
        $this->assertEquals(count($response[$this->api->itemName()]['events']), 2);
        $this->assertEquals(count($response[$this->api->itemName()]['lists']), 1);
        $this->assertEquals($response[$this->api->itemName()]['lists'][0]['id'], $newSegmentsArray[0]['id']);
        $this->assertEquals($response[$this->api->itemName()]['lists'][0]['name'], $newSegmentsArray[0]['name']);

        //now delete the form
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
        $this->clearPayloadItems();
    }

    public function testEventGetList()
    {
        $originalApi = $this->api;
        $this->api = $this->eventApi;
        $this->standardTestGetList();
        $this->api = $originalApi;
    }

    public function testCampaignContactGetList($cleanup = true)
    {
        $this->setUpPayloadClass();
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);

        // Create contact
        $contactsContext = $this->getContext('contacts');
        $response = $contactsContext->create(array('firstname' => 'API campagin test'));
        $this->assertErrors($response);
        $contact = $response['contact'];

        // Create campaign
        $response = $this->api->create($this->testPayload);
        $this->assertPayload($response);
        $campaign = $response[$this->api->itemName()];

        // Add the contact to the campaign
        $response = $this->api->addContact($campaign['id'], $contact['id']);
        $this->assertErrors($response);

        $campaignEvents = $campaign['events'];
        $eventIds = array();
        foreach ($campaignEvents as $event) {
            $eventIds[] = $event['id'];
        }

        $response = $this->eventApi->getContactCampaignEvents($campaign['id'], $contact['id']);
        $this->assertErrors($response);
        $campaignEvents = $response['events'];
        $eventLogIds = array();
        foreach ($campaignEvents as $event) {
            $eventLogIds[] = $event['id'];
        }

        $this->assertEquals($eventIds, $eventLogIds);

        if ($cleanup) {
            // Delete the contact and the campaign
            $response = $contactsContext->delete($contact['id']);
            $this->assertErrors($response);
            $response = $this->api->delete($campaign['id']);
            $this->assertErrors($response);
            $this->clearPayloadItems();
        } else {
            return array(
                'campaign' => $campaign,
                'events'   => $campaignEvents,
                'contact'  => $contact
            );
        }
    }

    public function testCampaignContactEditEvent()
    {
        $contactsContext = $this->getContext('contacts');
        $response = $this->testCampaignContactGetList(false);
        $campaign = $response['campaign'];
        $contact  = $response['contact'];
        $events   = $response['events'];

        $log = array(
            'triggerDate' => '2016-01-10 00:00:00'
        );

        // Edit an event and should get a log entry returned with same triggerDate

        $response = $this->eventApi->editContactEvent($contact['id'], $events[1]['id'], $log);
        $this->assertErrors($response);
        $this->assertNotEmpty($response[$this->eventApi->itemName()]['contactLog']);
        $this->assertTrue(isset($response[$this->eventApi->itemName()]['contactLog'][0]['triggerDate']), var_export($response, true));
        $date = new \DateTime($log['triggerDate'], new \DateTimeZone('UTC'));
        $this->assertEquals($response[$this->eventApi->itemName()]['contactLog'][0]['triggerDate'], $date->format('c'));
        $this->assertEquals($response[$this->eventApi->itemName()]['contactLog'][0]['isScheduled'], 1);

        // Ensure that decisions cannot be scheduled
        $response = $this->eventApi->editContactEvent($contact['id'], $events[0]['id'], $log);
        $this->assertNotEmpty($response['errors']);

        // Batch edit the events
        $log = array(
            array(
                'contactId' => $contact['id'],
                'eventId'   => $events[0]['id'],
                'dateTriggered' => '2016-01-10 00:00:00'
            ),
            array(
                'contactId' => $contact['id'],
                'eventId'   => $events[1]['id'],
                'triggerDate' => '2016-01-11 00:00:00'
            )
        );

        $response = $this->eventApi->editEvents($log);
        $this->assertErrors($response, var_export($events, true).var_export($response, true));
        foreach ($response[$this->eventApi->listName()] as $event) {
            $this->assertNotEmpty($event['contactLog']);
            $log = $event['contactLog'][0];

            if ($event['id'] === $events[0]['id']) {
                $date = new \DateTime($log['dateTriggered'], new \DateTimeZone('UTC'));
                $this->assertEquals($log['dateTriggered'], $date->format('c'));
            } elseif ($event['id'] === $events[1]['id']) {
                $date = new \DateTime($log['triggerDate'], new \DateTimeZone('UTC'));
                $this->assertEquals($log['triggerDate'], $date->format('c'));
            } else {
                $this->assertFalse(false, 'Event ID not recognized in the log.', var_export($event, true));
            }
        }

        // Delete the contact and the campaign
        $response = $contactsContext->delete($contact['id']);
        $this->assertErrors($response);
        $response = $this->api->delete($campaign['id']);
        $this->assertErrors($response);
        $this->clearPayloadItems();
    }

    public function testBCEndpoints()
    {
        $this->api->bcTesting = array('addContact', 'removeContact');
        $this->testAddAndRemove();
        $this->api->bcTesting = false;
    }

    protected function getListOfSpecificEventIds($response)
    {
        // Get a list of event IDs
        $eventIds = array();
        foreach ($response['campaign']['events'] as $event) {
            $eventIds[] = $event['id'];
        }
        $search   = 'ids:'.implode(',', $eventIds);
        $response = $this->eventApi->getList($search);
        $this->assertErrors($response);
        $this->assertEquals(count($eventIds), $response['total']);
    }
}
