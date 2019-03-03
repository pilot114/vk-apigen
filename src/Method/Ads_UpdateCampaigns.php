<?php

namespace VkApigen\Method;

/**
 * Edits advertising campaigns.
 */
class Ads_UpdateCampaigns extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.updateCampaigns');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_UpdateCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe changes in campaigns. Description of 'campaign_mod' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_UpdateCampaigns
    {
        $this->params['data'] = $data;
        return $this;
    }
}