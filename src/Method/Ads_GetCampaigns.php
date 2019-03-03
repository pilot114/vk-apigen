<?php

namespace VkApigen\Method;

/**
 * Returns a list of campaigns in an advertising account.
 */
class Ads_GetCampaigns extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getCampaigns');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetCampaigns
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'For advertising agencies'. ID of the client advertising campaigns are retrieved from.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : Ads_GetCampaigns
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Flag that specifies whether archived ads shall be shown. *0 — show only active campaigns,, *1 — show all campaigns.
     *
     * {"type":"bool"}
     */
    public function _include_deleted(bool $include_deleted) : Ads_GetCampaigns
    {
        $this->params['include_deleted'] = $include_deleted;
        return $this;
    }
    /**
     * Filter of advertising campaigns to show. Serialized JSON array with campaign IDs. Only campaigns that exist in 'campaign_ids' and belong to the specified advertising account will be shown. If the parameter is null, all campaigns will be shown.
     *
     * {"type":"string"}
     */
    public function _campaign_ids(string $campaign_ids) : Ads_GetCampaigns
    {
        $this->params['campaign_ids'] = $campaign_ids;
        return $this;
    }
}