<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class LeadsTest extends ContactsTest
{
    public function setUp()
    {
        parent::setUp();
        $this->api = $this->getContext('leads');
    }

    // Use the method from ContactsTest to test the 'leads' endpoint for BC
}
