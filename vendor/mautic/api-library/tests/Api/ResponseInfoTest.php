<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class ResponseInfoTest extends MauticApiTestCase
{
    public function setUp() {
        $this->api = $this->getContext('contacts');
        $response = $this->api->getList('', 0, 1);
        $this->assertErrors($response);
    }
    
    public function testGetVersion() {
        $version = $this->api->getMauticVersion();
        $this->assertRegExp("/^(\d+\.)?(\d+\.)?(.+|\d+)$/", $version);
    }

    public function testResponseInfo() {
        $info = $this->api->getResponseInfo();
        $this->assertEquals($info['content_type'], 'application/json');
    }

    public function testResponseHeaders() {
        $headers = $this->api->getResponseHeaders();
        $this->assertEquals($headers[0], 'HTTP/1.1 200 OK');
    }
}
