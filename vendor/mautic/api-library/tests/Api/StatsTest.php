<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class StatsTest extends MauticApiTestCase
{
    public function setUp()
    {
        $this->api = $this->getContext('stats');
    }

    protected function getTableList($withColumns = false)
    {
        // Store tables and columns
        static $tables, $tableColumns;
        if (empty($tables)) {
            $response     = $this->api->get();
            $tables       = $response['availableTables'];
            $tableColumns = $response['tableColumns'];
        }

        return ($withColumns) ? array($tables, $tableColumns) : $tables;
    }

    protected function assertPayload($response, array $payload = array(), $isBatch = false, $idColumn = 'id', $callback = null)
    {
        $this->assertErrors($response);
        $this->assertTrue(isset($response[$this->api->listName()]), 'The '.$this->api->listName().' array does not exist.');
    }

    protected function assertGreaterThanIdsInArray($response)
    {
        $previous = 0;

        foreach ($response[$this->api->listName()] as $row) {
            $id = (int) $row['id'];
            $this->assertGreaterThan($previous, $id);
            $previous = $id;
        }
    }

    protected function assertLessThanIdsInArray($response)
    {
        $previous = 999999999999999;

        foreach ($response[$this->api->listName()] as $row) {
            $id = (int) $row['id'];
            $this->assertLessThan($previous, $id);
            $previous = $id;
        }
    }

    public function testGetTables()
    {
        $expectedTables = array(
            'asset_downloads',
            'audit_log',
            'campaign_lead_event_log',
            'campaign_leads',
            'channel_url_trackables',
            'companies_leads',
            'dynamic_content_lead_data',
            'dynamic_content_stats',
            'email_stats',
            'email_stats_devices',
            'focus_stats',
            'form_submissions',
            'ip_addresses',
            'lead_categories',
            'lead_companies_change_log',
            'lead_devices',
            'lead_donotcontact',
            'lead_frequencyrules',
            'lead_lists_leads',
            'lead_points_change_log',
            'lead_stages_change_log',
            'lead_utmtags',
            'page_hits',
            'page_redirects',
            'point_lead_action_log',
            'point_lead_event_log',
            'push_notification_stats',
            'sms_message_stats',
            'stage_lead_action_log',
            'tweet_stats',
            'video_hits',
            'webhook_logs',
        );
        $tables         = $this->getTableList();
        $this->assertTrue(!empty($tables));
        $this->assertSame(
            array_diff($expectedTables, $tables),
            array_diff($tables, $expectedTables)
        );
    }

    public function testGetSimple()
    {
        foreach ($this->getTableList() as $table) {
            $response = $this->api->get($table);
            $this->assertPayload($response);
        }
    }

    public function testGetStartLimit()
    {
        foreach ($this->getTableList() as $table) {
            $response = $this->api->get($table, 1, 2);
            $this->assertPayload($response);
            $this->assertTrue((count($response[$this->api->listName()])) <= 2);
        }
    }

    public function testGetOrderSimple()
    {
        list($tables, $columns) = $this->getTableList(true);

        foreach ($tables as $table) {
            $hasId = (in_array('id', $columns[$table]));

            $response = $this->api->get(
                $table,
                0,
                10,
                array(
                    array(
                        'col' => ($hasId) ? 'id' : $columns[$table][0]
                    )
                )
            );
            $this->assertPayload($response);

            if ($hasId) {
                $this->assertGreaterThanIdsInArray($response);
            }
        }
    }

    public function testGetOrderAsc()
    {
        list($tables, $columns) = $this->getTableList(true);

        foreach ($tables as $table) {
            $hasId    = (in_array('id', $columns[$table]));
            $response = $this->api->get(
                $table,
                0,
                10,
                array(
                    array(
                        'col' => ($hasId) ? 'id' : $columns[$table][0],
                        'dir' => 'asc'
                    )
                )
            );
            $this->assertPayload($response);

            if ($hasId) {
                $this->assertGreaterThanIdsInArray($response);
            }
        }
    }

    public function testGetOrderDesc()
    {
        list($tables, $columns) = $this->getTableList(true);

        foreach ($tables as $table) {
            $hasId = (in_array('id', $columns[$table]));

            $response = $this->api->get(
                $table,
                0,
                10,
                array(
                    array(
                        'col' => ($hasId) ? 'id' : $columns[$table][0],
                        'dir' => 'DESC'
                    )
                )
            );
            $this->assertPayload($response);

            if ($hasId) {
                $this->assertLessThanIdsInArray($response);
            }
        }
    }

    public function testGetWhereEqual()
    {
        list($tables, $columns) = $this->getTableList(true);

        $where = array(
            array(
                'col'  => 'id',
                'expr' => 'eq',
                'val'  => 3,
            )
        );

        foreach ($tables as $table) {
            if (!in_array('id', $columns[$table])) {
                return;
            }

            $response = $this->api->get($table, 0, 2, array(), $where);
            $this->assertPayload($response);
            $this->assertTrue((count($response[$this->api->listName()])) <= 1);

            // The record might not exist in the database, but in case it does...
            if ((count($response[$this->api->listName()])) === 1) {
                $this->assertSame((int) $response[$this->api->listName()][0]['id'], $where[0]['val']);
            }
        }
    }

    public function testGetWhereGreaterThan()
    {
        list($tables, $columns) = $this->getTableList(true);

        $where = array(
            array(
                'col'  => 'id',
                'expr' => 'gt',
                'val'  => 3,
            )
        );

        foreach ($tables as $table) {
            if (!in_array('id', $columns[$table])) {
                return;
            }
            $response = $this->api->get($table, 0, 2, array(), $where);
            $this->assertPayload($response);

            // The record might not exist in the database, but in case it does...
            if ((count($response[$this->api->listName()])) > 0) {
                $this->assertGreaterThan($where[0]['val'], (int) $response[$this->api->listName()][0]['id']);
            }
        }
    }
}
