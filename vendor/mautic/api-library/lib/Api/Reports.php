<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Api;

/**
 * Reports Context
 */
class Reports extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'reports';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'reports';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'report';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
        'is:mine',
    );

    /**
     * @var array
     */
    protected $endpointsSupported = array(
        'get',
        'getList'
    );
}
