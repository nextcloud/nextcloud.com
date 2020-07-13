<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\QueryBuilder;

class QueryBuilder
{
    /**
     * @var array
     */
    protected $select = array();

    /**
     * @var array
     */
    protected $order = array();

    /**
     * @var array
     */
    protected $where = array();

    /**
     * @var WhereBuilder
     */
    static protected $whereBuilder;

    /**
     * @param $column
     */
    public function addSelect($column)
    {
        $this->select[] = $column;
    }

    /**
     * @param        $column
     * @param string $dir
     */
    public function addOrder($column, $dir = 'asc')
    {
        $this->order[] = array(
            'col' => $column,
            'dir' => $dir
        );
    }

    /**
     * @param WhereBuilder $whereBuilder
     */
    public function addWhere(WhereBuilder $whereBuilder = null)
    {
        if (null === $whereBuilder) {
            if (null === self::$whereBuilder) {
                return;
            }

            $whereBuilder = self::$whereBuilder;
        }

        $this->where = array_merge($this->where, $whereBuilder->getClauses());

        $this->resetWhereBuilder();
    }

    /**
     * @param bool $new
     *
     * @return WhereBuilder
     */
    public function getWhereBuilder($new = false)
    {
        if ($new) {
            return new WhereBuilder();
        }

        if (null == self::$whereBuilder) {
            $this->resetWhereBuilder();
        }

        return self::$whereBuilder;
    }

    /**
     * @return WhereBuilder
     */
    public function expr()
    {
        return $this->getWhereBuilder(true);
    }

    /**
     * @return array
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @param array $select
     *
     * @return QueryBuilder
     */
    public function setSelect($select)
    {
        $this->select = $select;

        return $this;
    }

    /**
     * @return array
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param array $order
     *
     * @return QueryBuilder
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return array
     */
    public function getWhere()
    {
        // Add clauses from static::$whereBuilder
        $this->addWhere();

        return $this->where;
    }

    /**
     * @param array $where
     *
     * @return QueryBuilder
     */
    public function setWhere($where)
    {
        $this->where = $where;

        return $this;
    }


    protected function resetWhereBuilder()
    {
        self::$whereBuilder = new WhereBuilder();
    }
}