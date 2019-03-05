<?php

namespace VkApigen\Method\Ads;

/**
 * Allows to get detailed information about the ad post reach.
 */
class GetAdsPostsReach extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getAdsPostsReach');
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
     * Ads IDS separated by comma.
     *
     * {"type":"string"}
     */
    public function ads_ids(string $ads_ids) : self
    {
        $this->params['ads_ids'] = $ads_ids;
        return $this;
    }
}