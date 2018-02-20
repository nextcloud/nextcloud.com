<?php
//         require_once(__DIR__ . '/vendor/autoload.php');
include __DIR__ . '/vendor/autoload.php';
use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;

if(isset($_POST['email'])) {
// var_dump($_POST['email']);
$email_to =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//         Let's get this contact in Mautic!

        session_start();

        $settings = array(
            'baseUrl'          => 'https://nextcloud.mautic.net',       // Base URL of the Mautic instance
            'version'          => 'OAuth2', // Version of the OAuth can be OAuth2 or OAuth1a. OAuth2 is the default value.
            'clientKey'        => '',       // Client/Consumer key from Mautic
            'clientSecret'     => '',       // Client/Consumer secret key from Mautic
            'callback'         => ''        // Redirect URI/Callback URI for this script
        );

        $initAuth = new ApiAuth();
        $auth = $initAuth->newAuth($settings);
        try {
            var_dump($email_to);
            die;
            if ($auth->validateAccessToken()) {
                // Obtain the access token returned; call accessTokenUpdated() to catch if the token was updated via a
                // refresh token

                // $accessTokenData will have the following keys:
                // For OAuth1.0a: access_token, access_token_secret, expires
                // For OAuth2: access_token, expires, token_type, refresh_token

                if ($auth->accessTokenUpdated()) {
                    $accessTokenData = $auth->getAccessTokenData();
                    var_dump($accessTokenData);

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
                        'email'     => $email_to,
                        'ipAddress' => $_SERVER['REMOTE_ADDR']
                    );

                    $contactApi = $api->newApi("contacts", $auth, $apiUrl);
                    $contact = $contactApi->create($data);

                    echo json_encode($contact);
                    die;
                }
            }
        } catch (Exception $e) {
            // Do Error handling
        var_dump($e);
        }
//     }
}
?>
