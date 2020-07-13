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
 * Pages Context
 */
class Pages extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'pages';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'page';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
        'is:mine',
        'is:uncategorized',
        'category',
        'lang',
    );
}
