<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | Authentication/Authorization Method
    |--------------------------------------------------------------------------
    |
    | Specifies which Class to use when creating the Auth class
    |
    | Currently supported values are:
    |   OAuth       - Uses the default OAuth class
    |   BasicAuth   - Uses Basic Authentication - Mautic >= 2.4
    |
    | Pass this as the second parameter to specify which to use.
    |
    | If commented out, will default OAuth. see MauticApiTestCase::getAuth()
    |
    */
    // 'AuthMethod'       => 'BasicAuth',

    /*
    |--------------------------------------------------------------------------
    | Basic Authentication credentials
    |--------------------------------------------------------------------------
    |
    | Basic Auth uses a simple username password method.
    |
    | It's important to note, that this is not recommended unless you are
    | using HTTPS as your username and password are exposed.
    |
    | BOTH the username and password are required. It's recommended that
    | you add a specific user and ensure a long passPhrase!
    |
    */
    // 'userName'         => '',
    // 'password'         => '',

    /*
    |--------------------------------------------------------------------------
    | OAuth credentials
    |--------------------------------------------------------------------------
    |
    | The API supports both OAuth1a and OAuth2.
    |
    | I've found there is more control if you specify which version you want
    | to use.
    |
    | Required mainly for OAuth 1a testing; 'OAuth1a' or 'OAuth2'
    |
    */
    'version'           => 'OAuth1a',

    // Required for OAuth1a and OAuth2
    'baseUrl'           => 'http://example.com/index_dev.php',

    // Required for All tests
    'apiUrl'            => 'http://example.com/index_dev.php/api/',
    // Required for EmailsTest
    'testEmail'         => 'notexisting@email.com',

    // Required for both OAuth 1a and 2 testing
    'accessToken'       => '',

    // Required only for OAuth 1a testing
    'accessTokenSecret' => '',
    'requestTokenUrl'   => '', // Set with any string to force the library to use the OAuth1.a spec; leave blank to use OAuth2
    'clientKey'         => '',
    'clientSecret'      => '',
    'callback'          => '',

    // Required only for OAuth 2 testing.
    'refreshToken'      => ''

);
