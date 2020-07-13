<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Exception;


class AuthorizationRequiredException extends \Exception
{
    /**
     * @var string
     */
    private $authUrl;

    /**
     * AuthorizationRequiredException constructor.
     * @param string $authUrl
     * {@inheritdoc}
     */
    public function __construct($authUrl, $message = 'Authorization is required.', $code = 401, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->authUrl = $authUrl;
    }

    /**
     * @return string
     */
    public function getAuthUrl()
    {
        return $this->authUrl;
    }
}