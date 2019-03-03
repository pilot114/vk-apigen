<?php

namespace VkApigen\Method;

/**
 * Allows to get detailed information about the ad post reach.
 */
class Ads_GetAdsPostsReach extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getAdsPostsReach');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetAdsPostsReach
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Ads IDS separated by comma.
     *
     * {"type":"string"}
     */
    public function ads_ids(string $ads_ids) : Ads_GetAdsPostsReach
    {
        $this->params['ads_ids'] = $ads_ids;
        return $this;
    }
}