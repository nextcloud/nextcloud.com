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
 * Smses Context
 */
class Smses extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'smses';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'smses';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'sms';

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
