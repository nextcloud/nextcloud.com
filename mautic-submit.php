<?php

    require_once(__DIR__ . '/vendor/autoload.php');
    use Mautic\Auth\ApiAuth;
    use Mautic\MauticApi;


    $settings = array(
        'baseUrl'          => 'https://nextcloud.mautic.net',       // Base URL of the Mautic instance
        'version'          => 'OAuth2', // Version of the OAuth can be OAuth2 or OAuth1a. OAuth2 is the default value.
        'clientKey'        => '1_35etb0g0u6kgogs48kg0k44084gswoowcgsogwo8g4s44ck8wg',       // Client/Consumer key from Mautic
        'clientSecret'     => 'gx67cch5bnk0csg4oosgoss4g00gsgwsw4wko44wwowg0404o',       // Client/Consumer secret key from Mautic
        'callback'         => 'http://localhost/wp-content/themes/nextcloud.com/mautic-submit.php'        // Redirect URI/Callback URI for this script
    );



    session_start();

    $_SESSION['email'] = $_POST['email'];

    $initAuth = new ApiAuth();
    $auth = $initAuth->newAuth($settings);




    if ($auth->validateAccessToken()) {
        // Obtain the access token returned; call accessTokenUpdated() to catch if the token was updated via a
        // refresh token

        // $accessTokenData will have the following keys:
        // For OAuth1.0a: access_token, access_token_secret, expires
        // For OAuth2: access_token, expires, token_type, refresh_token

        if ($auth->accessTokenUpdated()) {
            $accessTokenData = $auth->getAccessTokenData();

            // TODO save the token in some place, so we don't need to do the call every single time
            $apiUrl   = "https://nextcloud.mautic.net/";
            $api      = new MauticApi();

            // Example on how to get a contact and formated in a json object
            // $contactApi = $api->newApi("contacts", $auth, $apiUrl);
            // $contact = $contactApi->get(189);
            // echo json_encode($contact);

            // Example on how to create a contact

            // This info should be coming from the form
            $data = array(
                'firstname' => 'Test5',
                'lastname'  => 'Test7',
                'email'     => $_SESSION['email'],
                'ipAddress' => $_SERVER['REMOTE_ADDR']
            );

            $contactApi = $api->newApi("contacts", $auth, $apiUrl);
            $contact = $contactApi->create($data);
            echo $_SESSION['email'];

            echo json_encode($contact);
        }
    }

?>