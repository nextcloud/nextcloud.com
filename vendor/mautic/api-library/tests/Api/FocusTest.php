<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class FocusTest extends MauticApiTestCase
{
    protected $skipPayloadAssertion = array('htmlMode', 'properties');

    public function setUp()
    {
        $this->api = $this->getContext('focus');
        $this->testPayload = array(
            'name' => 'test',
            'type' => 'notice',
            'website' => 'http://',
            'style' => 'bar',
            'htmlMode' => 1,
            'html' => '<div><strong style="color:red">html mode enabled</strong></div>',
            'properties' => array(
                'bar' =>
                    array(
                        'allow_hide' => 1,
                        'sticky' => 1,
                        'size' => 'large',
                        'placement' => 'top',
                    ),
                'modal' =>
                    array(
                        'placement' => 'top',
                    ),
                'notification' =>
                    array(
                        'placement' => 'top_left',
                    ),
                'animate' => 1,
                'link_activation' => 1,
                'colors' => array(
                    'primary' => '27184e',
                ),
                'content' => array(
                    'headline' => '',
                    'font' => 'Arial, Helvetica, sans-serif',
                ),
                'when' => 'immediately',
                'frequency' => 'everypage',
                'stop_after_conversion' => 1,
            ),
        );
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testGetListOfSpecificIds()
    {
        $this->standardTestGetListOfSpecificIds();
    }

    public function testCreateGetAndDelete()
    {
        $this->standardTestCreateGetAndDelete();
    }

    public function testEditPatch()
    {
        $editTo = array(
            'name' => 'test2',
        );
        $this->standardTestEditPatch($editTo);
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints();
    }
}
