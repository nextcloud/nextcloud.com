<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Tests\Api;

class ThemesTest extends MauticApiTestCase
{
    public function setUp()
    {
        $this->api = $this->getContext('themes');
    }

    public function testGetList()
    {
        $response = $this->api->getList();
        $this->assertErrors($response);
        $this->assertTrue(isset($response[$this->api->listName()]));
        $this->assertTrue(isset($response[$this->api->listName()]['blank']));
        $this->assertTrue(isset($response[$this->api->listName()]['blank']['config']));
        $this->assertSame($response[$this->api->listName()]['blank']['name'], 'Blank');
        $this->assertSame($response[$this->api->listName()]['blank']['key'], 'blank');
    }

    public function testGetCreateAndDelete()
    {
        $themeName = 'api_test';

        // Get blank theme
        $response = $this->api->get('blank');
        $this->assertErrors($response);
        $this->assertFalse(empty($response['file']));
        $this->assertTrue(file_exists($response['file']));

        // Test setTemporaryFilePath
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mytempdir';
        $this->api->setTemporaryFilePath($dir);
        $response = $this->api->get('blank');
        $this->assertErrors($response);
        $this->assertFalse(empty($response['file']));
        $this->assertTrue(file_exists($response['file']));
        $this->assertEquals(realpath($dir), dirname($response['file']));

        // Create a new theme from the theme we just got
        $tmpFile = dirname(__DIR__).'/'.$themeName.'.zip';
        $this->assertTrue(rename($response['file'], $tmpFile), 'could not create '.$tmpFile);
        $response = $this->api->create(array('file' => $tmpFile));
        $this->assertErrors($response);
        $this->assertTrue($response['success']);

        // Delete the local copy of the theme
        unlink($tmpFile);

        // Ensure the theme we created is listed
        $response = $this->api->getList();
        $this->assertErrors($response);
        $this->assertTrue(isset($response[$this->api->listName()][$themeName]));

        // Delete the theme we just created
        $response = $this->api->delete($themeName);
        $this->assertErrors($response);
        $this->assertSuccess($response);

        // Ensure the theme we created is not listed
        $response = $this->api->getList();
        $this->assertErrors($response);
        $this->assertFalse(isset($response[$this->api->listName()][$themeName]));
    }
}
