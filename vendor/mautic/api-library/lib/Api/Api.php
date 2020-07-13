<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Api;

use Mautic\QueryBuilder\QueryBuilder;
use Mautic\Auth\ApiAuth;
use Mautic\Auth\AuthInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Base API class
 */
class Api implements LoggerAwareInterface
{
    /**
     * Used by unit testing to force use of BC endpoints
     *
     * @var bool
     */
    public $bcTesting = false;

    /**
     * Common endpoint for this API
     *
     * @var string
     */
    protected $endpoint;

    /**
     * Name of the array element where the list of items is
     *
     * @var string
     */
    protected $listName;

    /**
     * Name of the array element where the item data is
     *
     * @var string
     */
    protected $itemName;

    /**
     * Array of default endpoints supported by the context; if empty, all are supported
     *
     * @var array
     */
    protected $endpointsSupported = array();

    /**
     * Array of deprecated endpoints to use if a response fails as a 404 with a previous version of Mautic
     *
     * @var array
     */
    protected $bcRegexEndpoints = array();

    /**
     * Prevents from checking BC on a BC request
     *
     * @var bool
     */
    protected $bcAttempt = false;

    /**
     * Base URL for API endpoints
     *
     * @var string
     */
    protected $baseUrl;

    /**
     * Array of available search commands
     *
     * @var array
     */
    protected $searchCommands = array();

    /**
     * @var ApiAuth
     */
    private $auth;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param AuthInterface $auth
     * @param string        $baseUrl
     */
    public function __construct(AuthInterface $auth, $baseUrl = '')
    {
        $this->auth = $auth;
        $this->setBaseUrl($baseUrl);
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface
     */
    public function getLogger()
    {
        // If a logger hasn't been set, use NullLogger
        if (!($this->logger instanceof LoggerInterface)) {
            $this->logger = new NullLogger();
        }

        return $this->logger;
    }

    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     *
     * @return $this
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * Get the array of available search commands
     *
     * @return array
     */
    public function getSearchCommands()
    {
        return $this->searchCommands;
    }

    /**
     * Check if the search command is available
     *
     * @param string $command
     *
     * @return boolean
     */
    public function hasSearchCommand($command)
    {
        return in_array($command, $this->searchCommands);
    }

    /**
     * Returns list name
     *
     * @return string
     */
    public function listName()
    {
        return $this->listName;
    }

    /**
     * Returns item name
     *
     * @return string
     */
    public function itemName()
    {
        return $this->itemName;
    }

    /**
     * Set the base URL for API endpoints
     *
     * @param string $url
     *
     * @return $this
     */
    public function setBaseUrl($url)
    {
        if (substr($url, -1) != '/') {
            $url .= '/';
        }

        if (substr($url,-4,4) != 'api/') {
            $url .= 'api/';
        }

        $this->baseUrl = $url;

        return $this;
    }

    /**
     * Make the API request
     *
     * @param        $endpoint
     * @param array  $parameters
     * @param string $method
     *
     * @return array
     * @throws \Exception
     */
    public function makeRequest($endpoint, array $parameters = array(), $method = 'GET')
    {
        $response = array();

        // Validate if this endpoint has a BC url
        $bcEndpoint = null;
        if (!$this->bcAttempt) {
            if (!empty($this->bcRegexEndpoints)) {
                foreach ($this->bcRegexEndpoints as $regex => $bc) {
                    if (preg_match('@'.$regex.'@', $endpoint)) {
                        $this->bcAttempt = true;
                        $bcEndpoint = preg_replace('@'.$regex.'@', $bc, $endpoint);

                        break;
                    }
                }
            }
        }

        $url = $this->baseUrl.$endpoint;

        // Don't make the call if we're unit testing a BC endpoint
        if (!$bcEndpoint || !$this->bcTesting || ($bcEndpoint && $this->bcTesting && $this->bcAttempt)) {
            // Hack for unit testing to ensure this isn't being called due to a bad regex
            if ($this->bcTesting && !$this->bcAttempt) {
                $bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
                if (!is_array($this->bcTesting)) {
                    $this->bcTesting = array($this->bcTesting);
                }

                // The method is not catching the BC endpoint so fail the test
                if (in_array($bt[1]['function'], $this->bcTesting)) {
                    throw new \Exception($endpoint.' not matched in '.var_export($this->bcRegexEndpoints, true));
                }
            }
            $this->bcAttempt = false;

            if (strpos($url, 'http') === false) {
                $error = array(
                    'code'    => 500,
                    'message' => sprintf(
                        'URL is incomplete.  Please use %s, set the base URL as the third argument to $MauticApi->newApi(), or make $endpoint a complete URL.',
                        __CLASS__.'setBaseUrl()'
                    )
                );
            } else {
                try {
                    $settings = [];
                    if (method_exists($this, 'getTemporaryFilePath')) {
                        $settings['temporaryFilePath'] = $this->getTemporaryFilePath();
                    }
                    $response = $this->auth->makeRequest($url, $parameters, $method, $settings);

                    $this->getLogger()->debug('API Response', array('response' => $response));

                    if (!is_array($response)) {
                        $this->getLogger()->warning($response);

                        //assume an error
                        $error = array(
                            'code'    => 500,
                            'message' => $response
                        );
                    }

                    // @deprecated support for 2.6.0 to be removed in 3.0
                    if (!isset($response['errors']) && isset($response['error']) && isset($response['error_description'])) {
                        $message = $response['error'].': '.$response['error_description'];

                        $this->getLogger()->warning($message);

                        $error = array(
                            'code'    => 403,
                            'message' => $message
                        );
                    }
                } catch (\Exception $e) {
                    $this->getLogger()->error('Failed connecting to Mautic API: '.$e->getMessage(), array('trace' => $e->getTraceAsString()));

                    $error = array(
                        'code'    => $e->getCode(),
                        'message' => $e->getMessage()
                    );
                }
            }

            if (!empty($error)) {
                return array(
                    'errors' => array($error),
                    // @deprecated 2.6.0 to be removed 3.0
                    'error'  => $error
                );
            } elseif (!empty($response['errors'])) {
                $this->getLogger()->error('Mautic API returned errors: '.var_export($response['errors'], true));
            }

            // @deprecated 2.6.0 BC error handling
            // @todo remove in 3.0
            if (isset($response['error']) && !isset($response['errors'])) {
                if (isset($response['error_description'])) {
                    // BC Oauth2 error
                    $response['errors'] = array(
                        array(
                            'message' => $response['error_description'],
                            'type'    => $response['error']
                        )
                    );
                } elseif (isset($response['message'])) {
                    $response['errors'] = array(
                        $response['error']
                    );
                }
            }

            // Ensure a code is present in the error array
            if (!empty($response['errors'])) {
                $info = $this->auth->getResponseInfo();
                foreach ($response['errors'] as $key => $error) {
                    if (!isset($response['errors'][$key]['code'])) {
                        $response['errors'][$key]['code'] = $info['http_code'];
                    }
                }
            }
        }

        // Check for a 404 code and a BC URL then try again if applicable
        if ($bcEndpoint && ($this->bcTesting || (!empty($response['errors'][0]['code']) && (int) $response['errors'][0]['code'] === 404))) {
            $this->bcAttempt = true;

            return $this->makeRequest($bcEndpoint, $parameters, $method);
        }

        return $response;
    }

    /**
     * Returns HTTP response info
     *
     * @return array
     */
    public function getResponseInfo()
    {
        return $this->auth->getResponseInfo();
    }

    /**
     * Returns HTTP response headers
     *
     * @return array
     */
    public function getResponseHeaders()
    {
        return $this->auth->getResponseHeaders();
    }

    /**
     * Returns Mautic version from the HTTP response headers
     * (the header exists since Mautic 2.4.0)
     *
     * @return string|null if not known
     */
    public function getMauticVersion()
    {
        $headers = $this->auth->getResponseHeaders();

        if (isset($headers['Mautic-Version'])) {
            return $headers['Mautic-Version'];
        }

        return null;
    }

    /**
     * Get a single item
     *
     * @param int $id
     *
     * @return array|mixed
     */
    public function get($id)
    {
        return $this->makeRequest("{$this->endpoint}/$id");
    }

    /**
     * @param       $id
     * @param array $select
     *
     * @return array|bool
     */
    public function getCustom($id, array $select = array())
    {
        $supported = $this->isSupported('get');

        return (true === $supported) ? $this->makeRequest("{$this->endpoint}/$id", array('select' => $select)) : $supported;
    }

    /**
     * Get a list of items
     *
     * @param string $search
     * @param int    $start
     * @param int    $limit
     * @param string $orderBy
     * @param string $orderByDir
     * @param bool   $publishedOnly
     * @param bool   $minimal
     *
     * @return array|mixed
     */
    public function getList($search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC', $publishedOnly = false, $minimal = false)
    {
        $parameters = array(
            'search'        => $search,
            'start'         => $start,
            'limit'         => $limit,
            'orderBy'       => $orderBy,
            'orderByDir'    => $orderByDir,
            'publishedOnly' => $publishedOnly,
            'minimal'       => $minimal
        );

        $parameters = array_filter($parameters);

        return $this->makeRequest($this->endpoint, $parameters);
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param int          $start
     * @param int          $limit
     *
     * @return array|bool
     */
    public function getCustomList(QueryBuilder $queryBuilder, $start = 0, $limit = 0)
    {
        $parameters = array(
            'select' => $queryBuilder->getSelect(),
            'where'  => $queryBuilder->getWhere(),
            'order'  => $queryBuilder->getOrder(),
            'start'  => $start,
            'limit'  => $limit,
        );

        $parameters = array_filter($parameters);

        $supported = $this->isSupported('getList');

        return (true === $supported) ? $this->makeRequest($this->endpoint, $parameters) : $supported;
    }

    /**
     * Proxy function to getList with $publishedOnly set to true
     *
     * @param string $search
     * @param int    $start
     * @param int    $limit
     * @param string $orderBy
     * @param string $orderByDir
     *
     * @return array|mixed
     */
    public function getPublishedList($search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC')
    {
        return $this->getList($search, $start, $limit, $orderBy, $orderByDir, true);
    }

    /**
     * Create a new item (if supported)
     *
     * @param array $parameters
     *
     * @return array|mixed
     */
    public function create(array $parameters)
    {
        $supported = $this->isSupported('create');

        return (true === $supported) ? $this->makeRequest($this->endpoint.'/new', $parameters, 'POST') : $supported;
    }

    /**
     * Create a batch of new items
     *
     * @param array $parameters
     *
     * @return array|mixed
     */
    public function createBatch(array $parameters)
    {
        $supported = $this->isSupported('createBatch');

        return (true === $supported) ? $this->makeRequest($this->endpoint.'/batch/new', $parameters, 'POST') : $supported;
    }

    /**
     * Edit an item with option to create if it doesn't exist
     *
     * @param int   $id
     * @param array $parameters
     * @param bool  $createIfNotExists = false
     *
     * @return array|mixed
     */
    public function edit($id, array $parameters, $createIfNotExists = false)
    {
        $method    = $createIfNotExists ? 'PUT' : 'PATCH';
        $supported = $this->isSupported('edit');

        return (true === $supported) ? $this->makeRequest($this->endpoint.'/'.$id.'/edit', $parameters, $method) : $supported;
    }

    /**
     * Edit a batch of items
     *
     * @param array $parameters
     * @param bool  $createIfNotExists
     *
     * @return array|mixed
     */
    public function editBatch(array $parameters, $createIfNotExists = false)
    {
        $method    = $createIfNotExists ? 'PUT' : 'PATCH';
        $supported = $this->isSupported('editBatch');

        return (true === $supported) ? $this->makeRequest($this->endpoint.'/batch/edit', $parameters, $method) : $supported;
    }

    /**
     * Delete an item
     *
     * @param $id
     *
     * @return array|mixed
     */
    public function delete($id)
    {
        $supported = $this->isSupported('delete');

        return (true === $supported) ? $this->makeRequest($this->endpoint.'/'.$id.'/delete', array(), 'DELETE') : $supported;
    }

    /**
     * Delete a batch of items
     *
     * @param $ids
     *
     * @return array|mixed
     */
    public function deleteBatch(array $ids)
    {
        $supported = $this->isSupported('deleteBatch');

        return (true === $supported) ? $this->makeRequest($this->endpoint.'/batch/delete', array('ids' => $ids), 'DELETE') : $supported;
    }

    /**
     * Returns a not supported error
     *
     * @param string $action
     *
     * @return array
     */
    protected function actionNotSupported($action)
    {
        $error = array(
            'code'    => 500,
            'message' => "$action is not supported at this time."
        );

        return array(
            'errors' => array(
                $error
            ),
            // @deprecated 2.6.0 to be removed in 3.0
            'error'  => $error
        );
    }

    /**
     * Verify that a default endpoint is supported by the API
     *
     * @param $action
     *
     * @return bool
     */
    protected function isSupported($action)
    {
        if (empty($this->endpointsSupported) || in_array($action, $this->endpointsSupported)) {
            return true;
        }

        return $this->actionNotSupported($action);
    }
}
