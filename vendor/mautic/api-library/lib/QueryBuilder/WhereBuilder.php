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

/**
 * Class WhereBuilder
 */
class WhereBuilder
{
    /**
     * @var array
     */
    protected $clauses = array();

    /**
     * @var null
     */
    protected $composite = null;

    /**
     * WhereBuilder constructor.
     *
     * @param null $composite
     */
    public function __construct($composite = null)
    {
        $this->composite = $composite;
    }

    /**
     * @return array
     */
    public function getClauses()
    {
        return $this->clauses;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function eq($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function neq($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function lt($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function lte($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function gt($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function gte($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function like($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val
     *
     * @return $this
     */
    public function notLike($col, $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param       $col
     * @param array $val
     *
     * @return $this
     */
    public function in($col, array $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param       $col
     * @param array $val
     *
     * @return $this
     */
    public function notIn($col, array $val)
    {
        $this->addClause($col, __FUNCTION__, $val);

        return $this;
    }

    /**
     * @param $col
     * @param $val1
     * @param $val2
     *
     * @return $this
     */
    public function between($col, $val1, $val2)
    {
        $this->addClause($col, __FUNCTION__, array($val1, $val2));

        return $this;
    }

    /**
     * @param $col
     * @param $val1
     * @param $val2
     *
     * @return $this
     */
    public function notBetween($col, $val1, $val2)
    {
        $this->addClause($col, __FUNCTION__, array($val1, $val2));

        return $this;
    }

    /**
     * @param $col
     *
     * @return $this
     */
    public function isNull($col)
    {
        $this->addClause($col, __FUNCTION__);

        return $this;
    }

    /**
     * @param $col
     *
     * @return $this
     */
    public function isNotNull($col)
    {
        $this->addClause($col, __FUNCTION__);

        return $this;
    }

    /**
     * @param $col
     *
     * @return $this
     */
    public function isEmpty($col)
    {
        $this->addClause($col, __FUNCTION__);

        return $this;
    }

    /**
     * @param $col
     *
     * @return $this
     */
    public function isNotEmpty($col)
    {
        $this->addClause($col, __FUNCTION__);

        return $this;
    }

    /**
     * @return self
     */
    public function andX()
    {
        return $this->x('andX', func_get_args());
    }

    /**
     * @return WhereBuilder
     */
    public function orX()
    {
        return $this->x('orX', func_get_args());
    }

    /**
     * @param array|self $clause
     */
    public function add($clause)
    {
        if (is_array($clause)) {
            $this->clauses[] = $clause;
        } elseif ($clause instanceof self) {
            switch ($composite = $clause->getComposite()) {
                case 'andX':
                case 'orX':
                    $this->add(
                        array(
                            'col'  => null,
                            'expr' => $composite,
                            'val'  => $clause->getClauses()
                        )
                    );
                    break;
                default:
                    $this->clauses = array_merge($this->clauses, $clause->getClauses());
            }
        }
    }

    /**
     * @return null
     */
    public function getComposite()
    {
        return $this->composite;
    }

    /**
     * @param      $col
     * @param      $expr
     * @param null $val
     */
    private function addClause($col, $expr, $val = null)
    {
        $this->clauses[] = array(
            'col'  => $col,
            'expr' => $expr,
            'val'  => $val,
        );
    }

    /**
     * @param $composite
     * @param $clauses
     *
     * @return $this|WhereBuilder
     */
    private function x($composite, $clauses)
    {
        $builder = new self($composite);

        if ($clauses) {
            foreach ($clauses as $x) {
                $builder->add($x);
            }

            $this->add($builder);

            return $this;
        }

        return $builder;
    }
}