<?php

namespace VkApigen\Method;

/**
 * Returns a list of advertising agency's clients.
 */
class Ads_GetClients extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getClients');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}