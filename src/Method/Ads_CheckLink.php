<?php

namespace VkApigen\Method;

/**
 * Allows to check the ad link.
 */
class Ads_CheckLink extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.checkLink');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_CheckLink
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Object type: *'community' — community,, *'post' — community post,, *'application' — VK application,, *'video' — video,, *'site' — external site.
     *
     * {"type":"string","enum":["community","post","application","video","site"]}
     */
    public function link_type(string $link_type) : Ads_CheckLink
    {
        $this->params['link_type'] = $link_type;
        return $this;
    }
    /**
     * Object URL.
     *
     * {"type":"string"}
     */
    public function link_url(string $link_url) : Ads_CheckLink
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
    /**
     * Campaign ID
     *
     * {"type":"int"}
     */
    public function _campaign_id(int $campaign_id) : Ads_CheckLink
    {
        $this->params['campaign_id'] = $campaign_id;
        return $this;
    }
}