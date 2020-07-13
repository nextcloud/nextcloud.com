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
 * Devices Context
 */
class Devices extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'devices';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'devices';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'device';
}
