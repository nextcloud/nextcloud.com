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
 * Contacts Context
 */
class Contacts extends Api
{

    /**
     * Contact unsubscribed themselves.
     */
    const UNSUBSCRIBED = 1;

    /**
     * Contact was unsubscribed due to an unsuccessful send.
     */
    const BOUNCED = 2;

    /**
     * Contact was manually unsubscribed by user.
     */
    const MANUAL = 3;

    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'contacts';

    /**
     * {@inheritdoc}
     */
    protected $listName = 'contacts';

    /**
     * {@inheritdoc}
     */
    protected $itemName = 'contact';

    /**
     * @var array
     */
    protected $bcRegexEndpoints = array(
        'contacts/(.*?)/dnc/(.*?)/add'    => 'contacts/$1/dnc/add/$2', // 2.6.0
        'contacts/(.*?)/dnc/(.*?)/remove' => 'contacts/$1/dnc/remove/$2' // 2.6.0
    );

    /**
     * {@inheritdoc}
     */
    protected $searchCommands = array(
        'ids',
        'is:anonymous',
        'is:unowned',
        'is:mine',
        'name',
        'email',
        'segment',
        'company',
        'owner',
        'ip',
        'common',
    );

    /**
     * @param string $search
     * @param int    $start
     * @param int    $limit
     * @param string $orderBy
     * @param string $orderByDir
     * @param bool   $publishedOnly
     * @param bool   $minimal
     *
     * @return array|mixed
     */
    public function getIdentified($search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC', $publishedOnly = false, $minimal = false)
    {
        $search .= ($search) ? "$search !is:anonymous" : '!is:anonymous';

        return $this->getList($search, $start, $limit, $orderBy, $orderByDir, $publishedOnly, $minimal);
    }

    /**
     * Get a list of users available as contact owners
     *
     * @return array|mixed
     */
    public function getOwners()
    {
        return $this->makeRequest($this->endpoint.'/list/owners');
    }

    /**
     * Get a list of custom fields
     *
     * @return array|mixed
     */
    public function getFieldList()
    {
        return $this->makeRequest($this->endpoint.'/list/fields');
    }

    /**
     * Get a list of contact segments
     *
     * @return array|mixed
     */
    public function getSegments()
    {
        return $this->makeRequest($this->endpoint.'/list/segments');
    }

    /**
     * Get a list of a contact's engagement events
     *
     * @param int    $id Contact ID
     * @param string $search
     * @param array  $includeEvents
     * @param array  $excludeEvents
     * @param string $orderBy
     * @param string $orderByDir
     * @param int    $page
     *
     * @return array|mixed
     */
    public function getEvents(
        $id,
        $search = '',
        array $includeEvents = array(),
        array $excludeEvents = array(),
        $orderBy = '',
        $orderByDir = 'ASC',
        $page = 1
    ) {
        $parameters = array(
            'filters' => array(
                'search'        => $search,
                'includeEvents' => $includeEvents,
                'excludeEvents' => $excludeEvents,
            ),
            'order'   => array(
                $orderBy,
                $orderByDir,
            ),
            'page'    => $page
        );

        return $this->makeRequest(
            $this->endpoint.'/'.$id.'/events',
            $parameters
        );
    }

    /**
     * Get a list of a contact's notes
     *
     * @param int    $id Contact ID
     * @param string $search
     * @param int    $start
     * @param int    $limit
     * @param string $orderBy
     * @param string $orderByDir
     *
     * @return array|mixed
     */
    public function getContactNotes($id, $search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC')
    {
        $parameters = array(
            'search'     => $search,
            'start'      => $start,
            'limit'      => $limit,
            'orderBy'    => $orderBy,
            'orderByDir' => $orderByDir,
        );

        $parameters = array_filter($parameters);

        return $this->makeRequest($this->endpoint.'/'.$id.'/notes', $parameters);
    }

    /**
     * Get a list of a contact's devices
     *
     * @param int    $id Contact ID
     * @param string $search
     * @param int    $start
     * @param int    $limit
     * @param string $orderBy
     * @param string $orderByDir
     *
     * @return array|mixed
     */
    public function getContactDevices($id, $search = '', $start = 0, $limit = 0, $orderBy = '', $orderByDir = 'ASC')
    {
        $parameters = array(
            'search'     => $search,
            'start'      => $start,
            'limit'      => $limit,
            'orderBy'    => $orderBy,
            'orderByDir' => $orderByDir,
        );

        $parameters = array_filter($parameters);

        return $this->makeRequest($this->endpoint.'/'.$id.'/devices', $parameters);
    }

    /**
     * Get a list of smart segments the contact is in
     *
     * @param $id
     *
     * @return array|mixed
     */
    public function getContactSegments($id)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/segments');
    }

    /**
     * Get a list of companies the contact is in
     *
     * @param $id
     *
     * @return array|mixed
     */
    public function getContactCompanies($id)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/companies');
    }

    /**
     * Get a list of campaigns the contact is in
     *
     * @param $id
     *
     * @return array|mixed
     */
    public function getContactCampaigns($id)
    {
        return $this->makeRequest($this->endpoint.'/'.$id.'/campaigns');
    }

    /**
     * Add the points to a contact
     *
     * @param int   $id
     * @param int   $points
     * @param array $parameters 'eventName' and 'actionName'
     *
     * @return mixed
     */
    public function addPoints($id, $points, array $parameters = array())
    {
        return $this->makeRequest('contacts/'.$id.'/points/plus/'.$points, $parameters, 'POST');
    }

    /**
     * Subtract points from a contact
     *
     * @param int   $id
     * @param int   $points
     * @param array $parameters 'eventName' and 'actionName'
     *
     * @return mixed
     */
    public function subtractPoints($id, $points, array $parameters = array())
    {
        return $this->makeRequest('contacts/'.$id.'/points/minus/'.$points, $parameters, 'POST');
    }

    /**
     * Adds Do Not Contact
     *
     * @param int    $id
     * @param string $channel
     * @param int    $reason
     * @param null   $channelId
     * @param string $comments
     *
     * @return array|mixed
     */
    public function addDnc($id, $channel = 'email', $reason = Contacts::MANUAL, $channelId = null, $comments = 'via API') {

        return $this->makeRequest(
            'contacts/'.$id.'/dnc/'.$channel.'/add',
            array(
                'reason'    => $reason,
                'channelId' => $channelId,
                'comments'  => $comments,
            ),
            'POST'
        );
    }

    /**
     * Removes Do Not Contact
     *
     * @param int    $id
     * @param string $channel
     *
     * @return mixed
     */
    public function removeDnc($id, $channel)
    {
        return $this->makeRequest(
            'contacts/'.$id.'/dnc/'.$channel.'/remove',
            array(),
            'POST'
        );
    }

    /**
     * Add UTM Tags to Contact
     *
     * @param int    $id
     * @param array  $utmTags
     *
     * @return mixed
     */
    public function addUtm($id, $utmTags) {
        return $this->makeRequest(
            'contacts/'.$id.'/utm/add',
            $utmTags,
            'POST'
        );
    }

    /**
     * Remove UTM Tags from a Contact
     *
     * @param int    $id
     * @param int    $utmId
     *
     * @return mixed
     */
    public function removeUtm($id, $utmId) {
        return $this->makeRequest(
            'contacts/'.$id.'/utm/'.$utmId.'/remove',
            array(),
            'POST'
        );
    }
}
