<?php

namespace VkApigen\Method;

/**
 * Archives advertising campaigns.
 */
class Ads_DeleteCampaigns extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.deleteCampaigns');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_DeleteCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted campaigns.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : Ads_DeleteCampaigns
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}