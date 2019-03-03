<?php

namespace VkApigen\Method;

/**
 * Returns a reason of ad rejection for pre-moderation.
 */
class Ads_GetRejectionReason extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getRejectionReason');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetRejectionReason
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Ad ID.
     *
     * {"type":"int"}
     */
    public function ad_id(int $ad_id) : Ads_GetRejectionReason
    {
        $this->params['ad_id'] = $ad_id;
        return $this;
    }
}