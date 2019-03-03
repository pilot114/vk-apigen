<?php

namespace VkApigen\Method;

/**
 * Returns information about current state of a counter — number of remaining runs of methods and time to the next counter nulling in seconds.
 */
class Ads_GetFloodStats extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getFloodStats');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetFloodStats
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}