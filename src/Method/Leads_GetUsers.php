<?php

namespace VkApigen\Method;

/**
 * Returns a list of last user actions for the offer.
 */
class Leads_GetUsers extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('leads.getUsers');
    }
    /**
     * Offer ID.
     *
     * {"type":"int","minimum":0}
     */
    public function offer_id(int $offer_id) : Leads_GetUsers
    {
        $this->params['offer_id'] = $offer_id;
        return $this;
    }
    /**
     * Secret key obtained in the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : Leads_GetUsers
    {
        $this->params['secret'] = $secret;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Leads_GetUsers
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : Leads_GetUsers
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Action type. Possible values: *'0' — start,, *'1' — finish,, *'2' — blocking users,, *'3' — start in a test mode,, *'4' — finish in a test mode.
     *
     * {"type":"int","minimum":0,"enum":[0,1,2,3,4],"enumNames":["start","finish","blocking users","start in test mode","finish in test mode"]}
     */
    public function _status(int $status) : Leads_GetUsers
    {
        $this->params['status'] = $status;
        return $this;
    }
    /**
     * Sort order. Possible values: *'1' — chronological,, *'0' — reverse chronological.
     *
     * {"type":"bool"}
     */
    public function _reverse(bool $reverse) : Leads_GetUsers
    {
        $this->params['reverse'] = $reverse;
        return $this;
    }
}