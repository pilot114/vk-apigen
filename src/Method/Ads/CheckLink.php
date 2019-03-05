<?php

namespace VkApigen\Method\Ads;

/**
 * Allows to check the ad link.
 */
class CheckLink extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.checkLink');
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
     * Object type: *'community' — community,, *'post' — community post,, *'application' — VK application,, *'video' — video,, *'site' — external site.
     *
     * {"type":"string","enum":["community","post","application","video","site"]}
     */
    public function link_type(string $link_type) : self
    {
        $this->params['link_type'] = $link_type;
        return $this;
    }
    /**
     * Object URL.
     *
     * {"type":"string"}
     */
    public function link_url(string $link_url) : self
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
    /**
     * Campaign ID
     *
     * {"type":"int"}
     */
    public function _campaign_id(int $campaign_id) : self
    {
        $this->params['campaign_id'] = $campaign_id;
        return $this;
    }
}