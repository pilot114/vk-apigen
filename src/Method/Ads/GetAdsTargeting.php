<?php

namespace VkApigen\Method\Ads;

/**
 * Returns ad targeting parameters.
 */
class GetAdsTargeting extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('ads.getAdsTargeting');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : self
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Filter by ads. Serialized JSON array with ad IDs. If the parameter is null, all ads will be shown.
     *
     * {"type":"string"}
     */
    public function _ad_ids(string $ad_ids) : self
    {
        $this->params['ad_ids'] = $ad_ids;
        return $this;
    }
    /**
     * Filter by advertising campaigns. Serialized JSON array with campaign IDs. If the parameter is null, ads of all campaigns will be shown.
     *
     * {"type":"string"}
     */
    public function _campaign_ids(string $campaign_ids) : self
    {
        $this->params['campaign_ids'] = $campaign_ids;
        return $this;
    }
    /**
     * 'For advertising agencies.' ID of the client ads are retrieved from.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : self
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * flag that specifies whether archived ads shall be shown: *0 — show only active ads,, *1 — show all ads.
     *
     * {"type":"bool"}
     */
    public function _include_deleted(bool $include_deleted) : self
    {
        $this->params['include_deleted'] = $include_deleted;
        return $this;
    }
    /**
     * Limit of number of returned ads. Used only if 'ad_ids' parameter is null, and 'campaign_ids' parameter contains ID of only one campaign.
     *
     * {"type":"int"}
     */
    public function _limit(int $limit) : self
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}