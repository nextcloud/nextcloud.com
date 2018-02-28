# Using the Mautic API Library

## Requirements
* PHP 5.3.7 or newer
* cURL support

## Mautic Setup
The API must be enabled in Mautic. Within Mautic, go to the Configuration page (located in the Settings menu) and under API Settings enable
Mautic's API. If you intend on using Basic Authentication, ensure you enable it. You can also choose which OAuth protocol to use here.  After saving the configuration, go to the API Credentials page
(located in the Settings menu) and create a new client.  Enter the callback/redirect URI that the request will be sent from.  Click Apply
then copy the Client ID and Client Secret to the application that will be using the API.

## Authorization
    
### Obtaining an access token
The first step is to obtain authorization.  Mautic supports OAuth 1.0a and OAuth 2 however it is up to the administrator
to decide which is enabled.  Thus it is best to have a configuration option within your project for the administrator 
to choose what method should be used by your code.

```php
<?php

// Bootup the Composer autoloader
include __DIR__ . '/vendor/autoload.php';  

use Mautic\Auth\ApiAuth;

session_start();

$publicKey = ''; 
$secretKey = ''; 
$callback  = ''; 

// ApiAuth->newAuth() will accept an array of Auth settings
$settings = array(
    'baseUrl'          => '',       // Base URL of the Mautic instance
    'version'          => 'OAuth2', // Version of the OAuth can be OAuth2 or OAuth1a. OAuth2 is the default value.
    'clientKey'        => '',       // Client/Consumer key from Mautic
    'clientSecret'     => '',       // Client/Consumer secret key from Mautic
    'callback'         => ''        // Redirect URI/Callback URI for this script
);

/*
// If you already have the access token, et al, pass them in as well to prevent the need for reauthorization
$settings['accessToken']        = $accessToken;
$settings['accessTokenSecret']  = $accessTokenSecret; //for OAuth1.0a
$settings['accessTokenExpires'] = $accessTokenExpires; //UNIX timestamp
$settings['refreshToken']       = $refreshToken;
*/

// Initiate the auth object
$initAuth = new ApiAuth();
$auth = $initAuth->newAuth($settings);

// Initiate process for obtaining an access token; this will redirect the user to the $authorizationUrl and/or
// set the access_tokens when the user is redirected back after granting authorization

// If the access token is expired, and a refresh token is set above, then a new access token will be requested

try {
    if ($auth->validateAccessToken()) {

        // Obtain the access token returned; call accessTokenUpdated() to catch if the token was updated via a
        // refresh token

        // $accessTokenData will have the following keys:
        // For OAuth1.0a: access_token, access_token_secret, expires
        // For OAuth2: access_token, expires, token_type, refresh_token

        if ($auth->accessTokenUpdated()) {
            $accessTokenData = $auth->getAccessTokenData();

            //store access token data however you want
        }
    }
} catch (Exception $e) {
    // Do Error handling
}
```

### Using Basic Authentication Instead
Instead of messing around with OAuth, you may simply elect to use BasicAuth instead.

Here is the BasicAuth version of the code above.

```php
<?php

// Bootup the Composer autoloader
include __DIR__ . '/vendor/autoload.php';  

use Mautic\Auth\ApiAuth;

session_start();

// ApiAuth->newAuth() will accept an array of Auth settings
$settings = array(
    'userName'   => '',             // Create a new user       
    'password'   => ''              // Make it a secure password
);

// Initiate the auth object specifying to use BasicAuth
$initAuth = new ApiAuth();
$auth = $initAuth->newAuth($settings, 'BasicAuth');

// Nothing else to do ... It's ready to use.
// Just pass the auth object to the API context you are creating.
```

**Note:** If the credentials are incorrect an error response will be returned.

```php
 array('error' => array(
       'code'    => 403,
       'message' => 'access_denied: OAuth2 authentication required' )
 )
 
```

## API Requests
Now that you have an access token and the auth object, you can make API requests.  The API is broken down into contexts.
Note that currently only the Contact context allows creating, editing and deleting items.  The others are read only.

### Get a context object

```php
<?php

use Mautic\MauticApi;

// Create an api context by passing in the desired context (Contacts, Forms, Pages, etc), the $auth object from above
// and the base URL to the Mautic server (i.e. http://my-mautic-server.com/api/)

$api = new MauticApi();
$contactApi = $api->newApi('contacts', $auth, $apiUrl);
```

Supported contexts are currently:

See the [developer documentation](https://developer.mautic.org).

### Retrieving items
All of the above contexts support the following functions for retrieving items:

```php
<?php

$response = $contactApi->get($id);
$contact = $response[$contactApi->itemName()];

// getList accepts optional parameters for filtering, limiting, and ordering
$response = $contactApi->getList($filter, $start, $limit, $orderBy, $orderByDir);
$totalContacts = $response['total'];
$contact = $response[$contactApi->listName()];
```

### Creating an item

```php
<?php

$fields = $contactApi->getFieldList();

$data = array();

foreach ($fields as $field) {
    $data[$field['alias']] = $_POST[$field['alias']];
}

// Set the IP address the contact originated from if it is different than that of the server making the request
$data['ipAddress'] = $ipAddress;
 
// Create the contact 
$response = $contactApi->create($data);
$contact = $response[$contactApi->itemName()];
```
    
### Editing an item
Currently, only Contacts support this

```php
<?php

$updatedData = array(
    'firstname' => 'Updated Name'
);

$response = $contactApi->edit($contactId, $updatedData);
$contact = $response[$contactApi->itemName()];

// If you want to create a new contact in the case that $contactId no longer exists
// $response will be populated with the new contact item
$response = $contactApi->edit($contactId, $updatedData, true);
$contact = $response[$contactApi->itemName()];
```
    
### Deleting an item

```php
<?php

$response = $contactApi->delete($contactId);
$contact = $response[$contactApi->itemName()];
```

### Error handling

```php
<?php

// $response returned by an API call should be checked for errors
$response = $contactApi->delete($contactId);

if (isset($response['error'])) {
    echo $response['error']['code'] . ": " . $response['error']['message'];
} else {
    // do whatever with the info
}
```

## Unit tests

Configure the unit tests config before running the unit tests. The tests fire real API requests to a Mautic instance.

1. Copy `/tests/local.config.php.dist` to `/tests/local.config.php`.
2. Open the API tester in the browser like http://localhost/api-library/apitester/index.php
3. Fill in the URL of your Mautic instance.
4. Click Submit to store the URL to the session.
5. Fill in one of the OAuth credentials and authorize.
6. Open the $_SESSION array and copy the 'access_token' to the local.config.php file.
7. Then run `phpunit` to run the tests.

Modify this command to run a specific test: `phpunit --filter testCreateGetAndDelete tests/Api/NotesTest.php`

Modify this command to run all tests in one class: `phpunit --filter test tests/Api/NotesTest.php`
