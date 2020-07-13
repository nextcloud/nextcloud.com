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
 * Assets Context
 */
class Assets extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'assets';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'assets';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'asset';

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
    );
}
