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
 * Roles Context
 */
class Roles extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'roles';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'roles';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'role';

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:admin',
        'name',
    );
}