<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\Tests\QueryBuilder;

use Mautic\QueryBuilder\WhereBuilder;

class WhereBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testClauses()
    {
        $methods = array(
            'eq',
            'neq',
            'lt',
            'lte',
            'gt',
            'gte',
            'like',
            'notLike',
            'in',
            'notIn',
            'between',
            'notBetween',
            'isNull',
            'isNotNull',
            'isEmpty',
            'isNotEmpty',
        );

        $clauses = array();
        $whereBuilder = new WhereBuilder();
        foreach ($methods as $method) {
            $ignoreWhere = false;
            switch ($method) {
                case 'in':
                case 'notIn':
                    $val = array(1, 2);
                    break;
                case 'between':
                case 'notBetween':
                    $val = array(1, 2);
                    $whereBuilder->$method($method, $val[0], $val[1]);
                    $ignoreWhere = true;
                    break;
                case 'isNull':
                case 'isNotNull':
                case 'isEmpty':
                case 'isNotEmpty':
                    $val = null;
                    break;
                default:
                    $val = 1;
            }
            $clauses[] = array(
                'col' => $method,
                'expr' => $method,
                'val'  => $val
            );

            if (empty($ignoreWhere)) {
                $whereBuilder->$method($method, $val);
            }
        }

        $this->assertEquals($clauses, $whereBuilder->getClauses());

        $andX = $whereBuilder->andX();
        $andX->eq('eq', 2)
            ->neq('neq', 2)
            ->between('between', 1, 2);

        $clauses[] = array(
            'col' => null,
            'expr' => 'andX',
            'val'  => array(
                array(
                    'col' => 'eq',
                    'expr' => 'eq',
                    'val'  => 2
                ),
                array(
                    'col' => 'neq',
                    'expr' => 'neq',
                    'val'  => 2
                ),
                array(
                    'col' => 'between',
                    'expr' => 'between',
                    'val'  => array(1,2)
                ),
            ),
        );

        $whereBuilder->add($andX);

        $this->assertEquals($clauses, $whereBuilder->getClauses());
    }
}