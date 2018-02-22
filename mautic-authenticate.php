<?php
// we can't authenticate OAUth2 in the same php file as we handle the POST data from the form in (something about rewriting the headers twice). So we authenticate once per hour and write the token in a file for the scripts handling POST. This authentication runs at least once an hour with CRON.
include __DIR__ . '/vendor/autoload.php';       // Load the Mautic library
include __DIR__ . '/config.php';                // this should contain defined MAUTIC_PUBKEY and MAUTIC_SECRETKEY
use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;



session_start();

$settings = array(
    'baseUrl'          => 'https://mautic.nextcloud.com',       // Base URL of the Mautic instance
    'version'          => 'OAuth2',                             // Version of the OAuth can be OAuth2 or OAuth1a. OAuth2 is the default value.
    'clientKey'        => MAUTIC_PUBKEY,                       // Client/Consumer key from Mautic from config.php
    'clientSecret'     => MAUTIC_SECRETKEY,                    // Client/Consumer secret key from Mautic from config.php
    'callback'         => MAUTIC_CALLBACK                       // Redirect URI/Callback URI for this script, also
);

$initAuth = new ApiAuth();
$auth = $initAuth->newAuth($settings);
try {
    if ($auth->validateAccessToken()) {
        // Obtain the access token returned; call accessTokenUpdated() to catch if the token was updated via a
        // refresh token

        // $accessTokenData will have the following keys:
        // For OAuth1.0a: access_token, access_token_secret, expires
        // For OAuth2: access_token, expires, token_type, refresh_token

        if ($auth->accessTokenUpdated()) {
            $accessTokenData = $auth->getAccessTokenData();
            var_dump($accessTokenData);

            $file = './mautictoken.json';
            $content = json_encode($accessTokenData);
            file_put_contents($file, $content);
        }
    }
} catch (Exception $e) {
    // Do Error handling
var_dump($e);
}

?>
