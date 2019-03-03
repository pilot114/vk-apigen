<?php

namespace VkApigen\Method;

/**
 * Creates advertising campaigns.
 */
class Ads_CreateCampaigns extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.createCampaigns');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_CreateCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created campaigns. Description of 'campaign_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_CreateCampaigns
    {
        $this->params['data'] = $data;
        return $this;
    }
}