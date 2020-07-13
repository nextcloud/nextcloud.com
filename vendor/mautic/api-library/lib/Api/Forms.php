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
 * Forms Context
 */
class Forms extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'forms';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'forms';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'form';

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
        'name',
        'has:results',
    );

    /**
     * Remove fields from a form
     *
     * @param integer $formId
     * @param array   $fieldIds
     *
     * @return array|mixed
     */
    public function deleteFields($formId, array $fieldIds)
    {
        return $this->makeRequest($this->endpoint.'/'.$formId.'/fields/delete', array('fields' => $fieldIds), 'DELETE');
    }

    /**
     * Remove actions from a form
     *
     * @param integer $formId
     * @param array   $actionIds
     *
     * @return array|mixed
     */
    public function deleteActions($formId, array $actionIds)
    {
        return $this->makeRequest($this->endpoint.'/'.$formId.'/actions/delete', array('actions' => $actionIds), 'DELETE');
    }
}
