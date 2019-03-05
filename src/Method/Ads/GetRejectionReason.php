<?php

namespace VkApigen\Method\Ads;

/**
 * Returns a reason of ad rejection for pre-moderation.
 */
class GetRejectionReason extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getRejectionReason');
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
     * Ad ID.
     *
     * {"type":"int"}
     */
    public function ad_id(int $ad_id) : self
    {
        $this->params['ad_id'] = $ad_id;
        return $this;
    }
}