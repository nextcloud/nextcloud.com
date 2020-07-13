<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class ReportsTest extends MauticApiTestCase
{
    public function setUp() {
        $this->api = $this->getContext('reports');
    }

    public function testGet()
    {
        $response = $this->api->get(1);
        $this->assertErrors($response);
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }
}
