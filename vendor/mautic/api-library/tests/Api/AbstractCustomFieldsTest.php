<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\Tests\Api;


abstract class AbstractCustomFieldsTest extends MauticApiTestCase
{
    protected function assertPayload($response, array $payload = array(), $isBatch = false, $idColumn = 'id', $callback = null)
    {
        parent::assertPayload($response, $payload, $isBatch, $idColumn, array($this, 'validateFieldPayload'));
    }

    protected function validateFieldPayload($itemProp, $itemVal, $item)
    {
        $this->assertFalse(
            empty($item['fields']['all']),
            '[fields][all] is missing:'.var_export($item, true)
        );

        if (isset($item['fields']['all'][$itemProp])) {
            $item = $item['fields']['all'];
        }

        $this->assertTrue(isset($item[$itemProp]), $itemProp.' doesn\'t exist in the response: '.var_export($item, true));
        $this->assertEquals($item[$itemProp], $itemVal);
    }
}