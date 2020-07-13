<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class ListsTest extends SegmentsTest
{
    public function setUp() {
        $this->api = $this->getContext('lists');
        $this->testPayload = array(
            'name' => 'API test'
        );
    }

    // Use the methods from SegmentsTest, just make sure that BC for 'lists' context still work
}
