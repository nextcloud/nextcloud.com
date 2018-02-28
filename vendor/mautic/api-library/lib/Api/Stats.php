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
 * Stats Context
 */
class Stats extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'stats';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'stats';

    /**
     * Get a list of stat items
     *
     * @param string $table
     * @param int    $start
     * @param int    $limit
     * @param array  $order
     * @param array  $where
     *
     * @return array
     */
    public function get($table = '', $start = 0, $limit = 0, array $order = array(), array $where = array())
    {
        $parameters = array(
            'start' => $start,
            'limit' => $limit,
            'order' => $order,
            'where' => $where,
        );

        $parameters = array_filter($parameters);

        return $this->makeRequest($this->endpoint.'/'.$table, $parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {
        return $this->actionNotSupported('delete');
    }

    /**
     * {@inheritdoc}
     */
    public function getList($search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC', $publishedOnly = false, $minimal = false)
    {
        return $this->actionNotSupported('getList');
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $parameters)
    {
        return $this->actionNotSupported('create');
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedList($search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC')
    {
        return $this->actionNotSupported('getPublishedList');
    }

    /**
     * {@inheritdoc}
     */
    public function edit($id, array $parameters, $createIfNotExists = false)
    {
        return $this->actionNotSupported('edit');
    }
}
