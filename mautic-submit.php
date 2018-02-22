<?php
//         require_once(__DIR__ . '/vendor/autoload.php');
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/config.php';
use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;

if(isset($_POST['email'])) {
    // create data array to submit to Mautic
    $data = array();

    $data['email'] =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // sanitize email
//     $data['firstname'] = 'Jos';
//     $data['lastname'] = 'Test';
//     $data['email'] = 'blah@nextcloud.com';

    // load the accessTokenData array which consists of a accessToken, accessTokenSecret and accessTokenExpires
    $file = './mautictoken.json';
    $accessTokenData = json_decode(file_get_contents($file), TRUE);


    if (!empty($accessTokenData['access_token']) && !empty($accessTokenData['refresh_token'])) {
        $settings['accessToken']        = $accessTokenData['access_token'] ;
        $settings['refreshToken']  = $accessTokenData['refresh_token'];
        $settings['accessTokenExpires'] = $accessTokenData['expires'];
    }

    // start auth stuff, create request headers
    $initAuth   = new \Mautic\Auth\ApiAuth();
    $auth       = $initAuth->newAuth($settings);
    $apiUrl     = "https://nextcloud.mautic.net";
    $api        = new \Mautic\MauticApi();
    $contactApi = $api->newApi("contacts", $auth, $apiUrl);

    // create a list if fields from the contact API
    $fields = $contactApi->getFieldList();

    // fill up the data array with what we know
    foreach ($fields as $field) {
        $data[$field['alias']] = $data[$field['alias']];
    }

        $contact = $contactApi->create($data);

        echo 'contact' . '_-=|=-_                        _-=|=-_';
        var_dump($contact);

} // end of if(isset-post-email) section
?>

