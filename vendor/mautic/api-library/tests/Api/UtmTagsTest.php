<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class UtmTagsTest extends MauticApiTestCase
{
    protected $skipPayloadAssertion = array('lead');
    protected $fieldMapping = array(
        'query'        => 'query',
        'referer'      => 'referer',
        'remotehost'   => 'remoteHost',
        'url'          => 'url',
        'useragent'    => 'userAgent',
        'utm_campaign' => 'utmCampaign',
        'utm_source'   => 'utmSource',
        'utm_medium'   => 'utmMedium',
        'utm_content'  => 'utmContent',
        'utm_term'     => 'utmTerm'
    );

    public function setUp() {
        $this->api = $this->getContext('contacts');

        $this->testPayload = array(
            'query'        => array('foo'=>'bar','coy'=>'acme'),
            'referer'      => 'https://www.google.com/?q=mautic',
            'remotehost'   => 'mautic-api.test',
            'url'          => '/mautic/rulz/',
            'useragent'    => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_0 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Mobile/14A346 [FBAN/FBIOS;FBAV/68.0.0.49.70;FBBV/41924288;FBRV/0;FBDV/iPhone8,1;FBMD/iPhone;FBSN/iOS;FBSV/10.0;FBSS/2;FBCR/Verizon;FBID/phone;FBLC/en_US;FBOP/5',
            'utm_campaign' => 'apitest',
            'utm_source'   => 'qatest',
            'utm_medium'   => 'cli',
            'utm_content'  => 'test',
            'utm_term'     => 'phpunit',
        );

        // Create a contact for testing
        $contactApi = $this->getContext('contacts');
        $response = $contactApi->create(array('firstname' => 'UTMTags API test'));
        $this->assertErrors($response);
        $this->testPayload['lead'] = $response[$contactApi->itemName()]['id'];
    }

    public function tearDown() {
        // Delete a contact from test
        $this->api = $this->getContext('contacts');
        $response = $this->api->delete($this->testPayload['lead']);
        $this->assertErrors($response);
    }

    public function testAddCheckDeviceAndDelete()
    {
        // Check to make sure there is nothing to start...
        $response = $this->api->get($this->testPayload['lead']);
        // Check for errors
        $this->assertErrors($response);

        // it must have 0 utmtags
        $this->assertEquals(0, count($response[$this->api->itemName()]['utmtags']), 'No UTM Tags to begin');

        // Make sure there are no devices
        $responseDevices = $this->api->getContactDevices($this->testPayload['lead']);
        // Check for errors
        $this->assertErrors($responseDevices);

        // it must have 0 devices
        $this->assertEquals(0, $responseDevices['total'], 'No Devices to begin');

        // Add 2 identical tags
        $utmIds = $this->addUtmTags();

        // Make sure there is a new device
        $responseDevices = $this->api->getContactDevices($this->testPayload['lead']);
        // Check for errors
        $this->assertErrors($responseDevices);

        // it must have Only 1 device
        $this->assertSame(1, $responseDevices['total'], 'One Devices should exist');
        // it must be a smartphone
        $this->assertSame('smartphone', $responseDevices['devices'][0]['device'], 'Device is a Smartphone');

        // Remove them
        $this->removeUtmTags($utmIds);
    }

    public function testAddCheckActiveDateAndDelete()
    {
        // Add 2 identical tags
        $utmIds = $this->addUtmTags();

        // check the date; Should be empty
        $this->assertTrue(empty($response[$this->api->itemName()]['lastActive']));

        // Now add the payload with a known date
        $this->testPayload['lastActive'] = '2017-01-17T00:30:08+00:00';

        // Add 3rd UTM tags (position [2])
        $response = $this->api->addUtm($this->testPayload['lead'],$this->testPayload);
        // verify payload
        $this->assertUtmtags($response, 2);
        // Remeber it
        $utmIds[] = $response[$this->api->itemName()]['utmtags'][2]['id'];

        // check the date; Should NOT be empty
        $this->assertFalse(empty($response[$this->api->itemName()]['lastActive']));
        // It should be equal to what we set it to
        $this->assertSame($this->testPayload['lastActive'], $response[$this->api->itemName()]['lastActive']);

        // Remove them
        $this->removeUtmTags($utmIds);
    }

    protected function assertUtmtags($response, $level)
    {
        // Make sure no errors
        $this->assertErrors($response);

        // Should be an 'id' field
        $this->assertFalse(empty($response[$this->api->itemName()]['utmtags'][$level]['id']), 'The UTMTag id is empty.');

        // field names need mapping
        foreach ($this->fieldMapping as $payloadProp => $itemProp) {
            if (in_array($payloadProp, $this->skipPayloadAssertion)) continue;
            $this->assertTrue(array_key_exists($itemProp, $response[$this->api->itemName()]['utmtags'][0]), 'The [utmtags]["'.$itemProp.'"] item doesn\'t exist in the response.');
            $this->assertSame($this->testPayload[$payloadProp], $response[$this->api->itemName()]['utmtags'][0][$itemProp], 'Values do not match');
        }
    }

    protected function removeUtmTags($utmIds)
    {
        // Remove the UTM tags
        foreach ($utmIds as $utmId) {
            $response = $this->api->removeUtm($this->testPayload['lead'],$utmId);
            $this->assertErrors($response);

            if (!empty($response[$this->api->itemName()]['utmtags'])) {
                $this->assertTrue($response[$this->api->itemName()]['utmtags'][0]['id'] != $utmId, 'The id should not exist! (ID == '.$utmId .')' );
            }
        }

        $this->assertSame(0,count($response[$this->api->itemName()]['utmtags']), 'Should be no more items');
    }

    protected function addUtmTags()
    {
        // Add the UTM tags (position [0])
        $response = $this->api->addUtm($this->testPayload['lead'],$this->testPayload);
        // verify payload
        $this->assertUtmtags($response, 0);
        // Remeber it
        $utmIds[] = $response[$this->api->itemName()]['utmtags'][0]['id'];

        // Add 2nd UTM tags (position [1])
        $response = $this->api->addUtm($this->testPayload['lead'],$this->testPayload);
        // verify payload
        $this->assertUtmtags($response, 1);
        // Remeber it
        $utmIds[] = $response[$this->api->itemName()]['utmtags'][1]['id'];

        return $utmIds;
    }
}
