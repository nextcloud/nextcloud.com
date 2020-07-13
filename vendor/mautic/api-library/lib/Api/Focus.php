<?php
/*
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Api;

/*
 * Emails Context
 */
class Focus extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'focus';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'focus';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'focus';

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
