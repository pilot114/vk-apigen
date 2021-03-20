<?php

namespace VkApigen\Method\Ads;

/**
 * Returns a list of campaigns in an advertising account.
 */
class GetCampaigns extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getCampaigns');
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
     * 'For advertising agencies'. ID of the client advertising campaigns are retrieved from.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : self
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Flag that specifies whether archived ads shall be shown. *0 — show only active campaigns,, *1 — show all campaigns.
     *
     * {"type":"bool"}
     */
    public function _include_deleted(bool $include_deleted) : self
    {
        $this->params['include_deleted'] = $include_deleted;
        return $this;
    }
    /**
     * Filter of advertising campaigns to show. Serialized JSON array with campaign IDs. Only campaigns that exist in 'campaign_ids' and belong to the specified advertising account will be shown. If the parameter is null, all campaigns will be shown.
     *
     * {"type":"string"}
     */
    public function _campaign_ids(string $campaign_ids) : self
    {
        $this->params['campaign_ids'] = $campaign_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string","enum":["ads_count"]}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}