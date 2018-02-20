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
 * Categories Context
 */
class Categories extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'categories';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'category';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:published',
        'is:unpublished',
    );
}
