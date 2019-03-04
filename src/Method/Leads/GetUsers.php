<?php

namespace VkApigen\Method\Leads;

/**
 * Returns a list of last user actions for the offer.
 */
class GetUsers extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function offer_id(int $offer_id) : self
    {
        $this->params['offer_id'] = $offer_id;
        return $this;
    }
    /**
     * Secret key obtained in the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : self
    {
        $this->params['secret'] = $secret;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Action type. Possible values: *'0' — start,, *'1' — finish,, *'2' — blocking users,, *'3' — start in a test mode,, *'4' — finish in a test mode.
     *
     * {"type":"int","minimum":0,"enum":[0,1,2,3,4],"enumNames":["start","finish","blocking users","start in test mode","finish in test mode"]}
     */
    public function _status(int $status) : self
    {
        $this->params['status'] = $status;
        return $this;
    }
    /**
     * Sort order. Possible values: *'1' — chronological,, *'0' — reverse chronological.
     *
     * {"type":"bool"}
     */
    public function _reverse(bool $reverse) : self
    {
        $this->params['reverse'] = $reverse;
        return $this;
    }
}