<?php
/**
 * @package     Mautic
 * @copyright   2016 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Api;

/**
 * Dynamiccontents Context
 */
class DynamicContents extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'dynamiccontents';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'dynamicContents';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'dynamicContent';

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
