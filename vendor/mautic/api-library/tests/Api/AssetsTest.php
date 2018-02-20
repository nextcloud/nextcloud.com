<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class AssetsTest extends MauticApiTestCase
{
    protected $skipPayloadAssertion = array('file');

    public function setUp() {
        $this->api = $this->getContext('assets');
        $this->testPayload = array(
            'title' => 'Mautic Logo sent as a API request',
            'storageLocation' => 'remote',
            'file' => 'https://www.mautic.org/media/logos/logo/Mautic_Logo_DB.pdf'
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

    public function testCreateWithLocalFileGetAndDelete()
    {
        // Upload a testing file
        $this->apiFiles = $this->getContext('files');
        $this->apiFiles->setFolder('assets');
        $fileRequest = array(
            'file' => dirname(__DIR__).'/'.'mauticlogo.png'
        );
        $response = $this->apiFiles->create($fileRequest);
        $this->assertErrors($response);
        $file = $response['file'];

        // Build local file payload
        $testPayload = $this->testPayload;
        $testPayload['storageLocation'] = 'local';
        $testPayload['file'] = $file['name'];

        // Create Asset
        $response = $this->api->create($testPayload);
        $this->assertPayload($response, $testPayload);

        $response = $this->api->get($response[$this->api->itemName()]['id']);
        $this->assertPayload($response, $testPayload);

        // Delete Asset
        $response = $this->api->delete($response[$this->api->itemName()]['id']);
        $this->assertErrors($response);
    }

    public function testCreateWithRemoteFileGetAndDelete()
    {
        $this->standardTestCreateGetAndDelete();
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints();
    }

    public function testEditPatch()
    {
        $editTo = array(
            'title' => 'test2',
        );
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }
}
