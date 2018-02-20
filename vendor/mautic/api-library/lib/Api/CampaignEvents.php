<?php
/**
 * @package     Mautic
 * @copyright   2016 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Api;

/**
 * CampaignEvents Context
 */
class CampaignEvents extends Api
{

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'campaigns/events';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'events';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'event';

    /**
     * @var array
     */
    protected $endpointsSupported = array(
        'get',
        'getList'
    );

    /**
     * Get contact events across all campaigns
     *
     * @param        $contactId
     * @param string $search
     * @param int    $start
     * @param int    $limit
     * @param string $orderBy
     * @param string $orderByDir
     *
     * @return array|mixed
     */
    public function getContactEvents($contactId, $search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC')
    {
        $parameters = array(
            'search'        => $search,
            'start'         => $start,
            'limit'         => $limit,
            'orderBy'       => $orderBy,
            'orderByDir'    => $orderByDir,
        );

        $parameters = array_filter($parameters);

        return $this->makeRequest($this->endpoint.'/contact/'.$contactId, $parameters);
    }

    /**
     * Get contact events for a single campaign
     *
     * @param        $campaignId
     * @param        $contactId
     * @param string $search
     * @param int    $start
     * @param int    $limit
     * @param string $orderBy
     * @param string $orderByDir
     *
     * @return array|mixed
     */
    public function getContactCampaignEvents($campaignId, $contactId, $search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC')
    {
        $parameters = array(
            'search'        => $search,
            'start'         => $start,
            'limit'         => $limit,
            'orderBy'       => $orderBy,
            'orderByDir'    => $orderByDir,
        );

        $parameters = array_filter($parameters);

        return $this->makeRequest('campaigns/'.$campaignId.'/events/contact/'.$contactId, $parameters);
    }

    /**
     * Edit or schedule a campaign event for a specific contact.
     *
     * @param $contactId
     * @param $eventId
     * @param $parameters
     *
     * @return array|mixed
     */
    public function editContactEvent($contactId, $eventId, array $parameters)
    {
        return $this->makeRequest($this->endpoint.'/'.$eventId.'/contact/'.$contactId.'/edit', $parameters, 'PUT');
    }

    /**
     * Edit or schedule multiple events
     *
     * @param array $parameters
     *
     * @return array|mixed
     */
    public function editEvents(array $parameters)
    {
        return $this->makeRequest($this->endpoint.'/batch/edit', $parameters, 'PUT');
    }
}
