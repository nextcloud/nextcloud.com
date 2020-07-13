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
 * Data Context
 */
class Data extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'data';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'types';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'data';

    /**
     * Get a single item
     *
     * @param int   $id
     * @param array $options
     *
     * @return array|mixed
     */
    public function get($id, $options = array())
    {
        return $this->makeRequest("{$this->endpoint}/$id", $options);
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedList($search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC')
    {
        return $this->actionNotSupported(__FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $parameters)
    {
        return $this->actionNotSupported(__FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function edit($id, array $parameters, $createIfNotExists = false)
    {
        return $this->actionNotSupported(__FUNCTION__);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {
        return $this->actionNotSupported(__FUNCTION__);
    }
}
