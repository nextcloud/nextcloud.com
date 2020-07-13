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
 * Emails Context
 */
class Emails extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'emails';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'emails';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'email';

    /**
     * @var array
     */
    protected $bcRegexEndpoints = array(
        'emails/(.*?)/contact/(.*?)/send' => 'emails/$1/send/contact/$2', // 2.6.0
    );

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


    /**
     * Send email to the assigned lists
     *
     * @param int $id
     *
     * @return array|mixed
     */
    public function send($id)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/send', array(), 'POST');
    }

    /**
     * Send email to a specific contact
     *
     * @param int $id
     * @param int $contactId
     *
     * @return array|mixed
     */
    public function sendToContact($id, $contactId)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/contact/'.$contactId.'/send', array(), 'POST');
    }

    /**
     * Send email to a specific lead
     *
     * @deprecated use sendToContact instead
     *
     * @param int $id
     * @param int $leadId
     *
     * @return array|mixed
     */
    public function sendToLead($id, $leadId)
    {
        return $this->sendToContact($id, $leadId);
    }
}
