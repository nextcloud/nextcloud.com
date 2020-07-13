<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class DataTest extends MauticApiTestCase
{
    /*
    * Currently supported "Data" items (AFAIK)
    */
    protected $dataToTest = Array(
        'Core Widgets' => Array(
            'recent.activity'                => 'Recent Activity'
            ),
        'Asset Widgets' => Array(
            'asset.downloads.in.time'        => 'Downloads in time',
            'unique.vs.repetitive.downloads' => 'Unique vs repetitive downloads',
            'popular.assets'                 => 'Popular assets',
            'created.assets'                 => 'Created assets'
            ),
        'Campaign Widgets' => Array(
            'events.in.time'                 => 'Events triggered in time',
            'leads.added.in.time'            => 'Leads added in time'
            ),
        'Email Widgets' => Array(
            'emails.in.time'                 => 'Emails in time',
            'ignored.vs.read.emails'         => 'Ignored vs read',
            'upcoming.emails'                => 'Upcoming emails',
            'most.sent.emails'               => 'Most sent emails',
            'most.read.emails'               => 'Most read emails',
            'created.emails'                 => 'Created emails',
            'device.granularity.email'       => 'Devices for emails read'
            ),
        'Form Widgets' => Array(
            'submissions.in.time'            => 'Submissions in time',
            'top.submission.referrers'       => 'Top submission referrers',
            'top.submitters'                 => 'Top submitters',
            'created.forms'                  => 'Created forms'
            ),
        'Contact Widgets' => Array(
            'created.leads.in.time'          => 'Created contacts in time',
            'anonymous.vs.identified.leads'  => 'Anonymous vs identified contacts',
            'lead.lifetime'                  => 'Lifecycle',
            'map.of.leads'                   => 'Map',
            'top.lists'                      => 'Top segments',
            'top.creators'                   => 'Top contact creators',
            'top.owners'                     => 'Top contact owners',
            'created.leads'                  => 'Created contacts'
        ),
        'Page Widgets' => Array(
            'page.hits.in.time'              => 'Page visits in time',
            'unique.vs.returning.leads'      => 'Unique vs returning visitors',
            'dwell.times'                    => 'Dwell times',
            'popular.pages'                  => 'Popular landing pages',
            'created.pages'                  => 'Created Landing pages',
            'device.granularity'             => 'Device granularity'
        ),
        'Point Widgets' => Array(
            'points.in.time'                 => 'Points in time'
        ),
        'Report Widgets' => Array(
            'report'                         => 'Report Graph'
        ),
        'Stage Widgets' => Array(
            'stages.in.time'                 => 'Stages in time'
        )
    );

    public function setUp() {
        $this->api = $this->getContext('data');
    }

    protected function assertPayload($response, array $payload = array(), $isBatch = false, $idColumn = 'id', $callback = null)
    {
        $this->assertErrors($response);
        $this->assertTrue(isset($response[$this->api->listName()]), 'The '.$this->api->listName().' array does not exist.');
    }

    protected function assertGroupGet($group, $dump = false)
    {
        $this->assertTrue(isset($this->dataToTest[$group]),' Expecting '. $group . ' as Data Item');
        // Test each of the items in this group
        foreach ($this->dataToTest[$group] as $dataId => $description) {
            // used to debug why test is failing
            if ($dump) {
                echo 'Test for '. $dataId .' data ' . PHP_EOL;
            }
            $response = $this->api->get($dataId);
            if ($dump) {
                print_r($response);
            }
            $this->assertTrue(!empty($response[$this->api->itemName()]), 'Should contain ' . $this->api->itemName() . ' name element');
        }
    }

    /**
    * TODO: Add test for available options
    * - Possible options :
    *   'timezone'     => 'UTC'
    *   'dateFrom'     => $fromDate,
    *   'dateTo'       => $toDate,
    *   'dataFormat'   => 'raw'
    *   'timeUnit'     => 'Y'
    *   'dateFormat'   => null
    *   'limit'        => 5
    *   'filter'       => []
    *   'cacheTimeout' => null
    *   'height'       => 300
    */
    public function testUnsupportedFeatures()
    {
        $notSupported = array(
            'getPublishedList'  => function() { return $this->api->getPublishedList();},
            'create'            => function() { return $this->api->create(array());   },
            'edit'              => function() { return $this->api->edit('x',array()); },
            'delete'            => function() { return $this->api->delete('x');       },
            );
        foreach($notSupported as $key => $closure) {
            $response = $closure();
            $this->assertTrue(!empty($response['error']), 'Should contain Error element');
            $this->assertEquals($response['error']['code'], 500, 'Should contain code 500');
            $this->assertEquals($response['error']['message'], $key . ' is not supported at this time.', 'Should be equal');
        }
    }

    public function testGetListData()
    {
        $response = $this->api->getList();
        $this->assertTrue(!empty($response['types']),'Check "types" exists in Array');
        $this->assertPayload($response);
        // Types contains 10 elements when test written
        $this->assertTrue((count($response[$this->api->listName()])) >= 10, 'Should contain 10 or more elements');

        // test all currently known types exist
        foreach( $this->dataToTest as $key => $data) {
            $this->assertTrue(isset($response['types'][$key]), 'Should contain key of '. $key);
        }
    }

    public function testGetCoreWidgetsData()
    {
        $this->assertGroupGet('Core Widgets');
    }

    public function testGetAssetWidgetsData()
    {
        $this->assertGroupGet('Asset Widgets');
    }

    public function testGetCampaignWidgetsData()
    {
        $this->assertGroupGet('Campaign Widgets');
    }

    public function testGetEmailWidgetsData()
    {
        $this->assertGroupGet('Email Widgets');
    }

    public function testGetFormWidgetsData()
    {
        $this->assertGroupGet('Form Widgets');
    }

    public function testGetContactWidgetsData()
    {
        $this->assertGroupGet('Contact Widgets');
    }

    public function testGetPageWidgetsData()
    {
        $this->assertGroupGet('Page Widgets');
    }

    public function testGetPointWidgetsData()
    {
        $this->assertGroupGet('Point Widgets');
    }

    public function testGetStageWidgetsData()
    {
        $this->assertGroupGet('Stage Widgets');
    }

/*
    // Currently this fails. Need to investigate why...
    //
    public function testGetReportWidgetsData()
    {
        $this->assertGroupGet('Report Widgets', true);
    }
*/
}
