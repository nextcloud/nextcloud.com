<?php

/*
 * @copyright   2017 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

/*
|--------------------------------------------------------------------------
| Basic Authentication Flow
|--------------------------------------------------------------------------
|
| use Mautic\Auth\ApiAuth;
|
| // ApiAuth->newAuth() will accept an array of Auth settings
| $settings = array(
|     'AuthMethod'       => 'BasicAuth' // Must be one of 'OAuth' or 'BasicAuth'
|     'userName'         => '',         // The username for authentication; Best practise would be to set up a new user for each external site
|     'password'         => '',         // Make this a Long passPhrase e.g. (Try.!wE4.And.*@ws4.Guess.!a4911.This.*-+1.Sucker.!)
|     'apiUrl'           => '',         // NOTE: Required for Unit tests; *must* contain a valid url
| );
|
| // Initiate the auth object
| $initAuth = new ApiAuth();
| $auth = $initAuth->newAuth($settings, $settings['AuthMethod']);
|
|--------------------------------------------------------------------------
| Basic API Usage
|--------------------------------------------------------------------------
|
| To use, just pass the auth object to the Api context you are creating.
|
| use Mautic\MauticApi;
|
| // Get a Contact context
| $api = new MauticApi();
| $contactApi = $api->newApi('contacts', $auth, $settings['apiUrl']);
|
| // Get Contact list
| $results = $contactApi->getList();
|
| Note: If the credentials are incorrect an error response will be returned:
| array('error' => array(
|       'code'    => 403,
|       'message' => 'access_denied: OAuth2 authentication required' )
| )
|
*/

namespace Mautic\Auth;

use Mautic\Exception\RequiredParameterMissingException;

/**
 * Basic Authentication Client mashed together by MarkLL
 */
class BasicAuth extends AbstractAuth
{
    /**
     * Password associated with Username
     *
     * @var string
     */
    private $password;

    /**
     * Username or email, basically the Login Identifier
     *
     * @var string
     */
    private $userName;

    /**
     * {@inheritdoc}
     */
    public function isAuthorized()
    {
        return (!empty($this->userName) && !empty($this->password));
    }

    /**
     * @param string $userName              The username to use for Authentication *Required*
     * @param string $password              The Password to use                    *Required*
     *
     * @throws RequiredParameterMissingException
     */
    public function setup($userName, $password) {
        // we MUST have the username and password. No Blanks allowed!
        //
        // remove blanks else Empty doesn't work
        $userName = trim($userName);
        $password = trim($password);

        if (empty($userName) || empty($password)) {
            //Throw exception if the required parameters were not found
            $this->log('parameters did not include username and/or password');
            throw new RequiredParameterMissingException('One or more required parameters was not supplied. Both userName and password required!');
        }

        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * @param       $url
     * @param array $headers
     * @param array $parameters
     * @param       $method
     * @param array $settings
     *
     * @return array
     */
    protected function prepareRequest($url, array $headers, array $parameters, $method, array $settings)
    {
        //Set Basic Auth parameters/headers
        $headers = array_merge($headers, array($this->buildAuthorizationHeader(), 'Expect:'));

        return array($headers, $parameters);
    }

    /**
     * Build header for Basic Authentication
     *
     * @return string
     */
    private function buildAuthorizationHeader()
    {
        /*
        |--------------------------------------------------------------------------
        | Authorization Header
        |--------------------------------------------------------------------------
        |
        | Authorization is passed in the Header using Basic Authentication.
        |
        | Basically we take the username and password and seperate it with a
        | colon (:) and base 64 encode it:
        |
        |   'Authorization: Basic username:password'
        |
        |   ==> with base64 encoding of the username and password
        |
        |   'Authorization: Basic dXNlcjpwYXNzd29yZA=='
        |
        */
        return 'Authorization: Basic ' . base64_encode($this->userName.':'.$this->password);
    }
}
