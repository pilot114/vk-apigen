<?php

namespace VkApigen\Method\Ads;

/**
 * Returns the size of targeting audience, and also recommended values for CPC and CPM.
 */
class GetTargetingStats extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.getTargetingStats');
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
     * Serialized JSON object that describes targeting parameters. Description of 'criteria' object see below.
     *
     * {"type":"string"}
     */
    public function _criteria(string $criteria) : self
    {
        $this->params['criteria'] = $criteria;
        return $this;
    }
    /**
     * ID of an ad which targeting parameters shall be analyzed.
     *
     * {"type":"int"}
     */
    public function _ad_id(int $ad_id) : self
    {
        $this->params['ad_id'] = $ad_id;
        return $this;
    }
    /**
     * Ad format. Possible values: *'1' — image and text,, *'2' — big image,, *'3' — exclusive format,, *'4' — community, square image,, *'7' — special app format,, *'8' — special community format,, *'9' — post in community,, *'10' — app board.
     *
     * {"type":"int","enum":[1,2,3,4,7,8,9,10],"enumNames":["image and text","big image","exclusive format","community square image","special app format","special community format","post in community","app board"]}
     */
    public function _ad_format(int $ad_format) : self
    {
        $this->params['ad_format'] = $ad_format;
        return $this;
    }
    /**
     * Platforms to use for ad showing. Possible values: (for 'ad_format' = '1'), *'0' — VK and partner sites,, *'1' — VK only. (for 'ad_format' = '9'), *'all' — all platforms,, *'desktop' — desktop version,, *'mobile' — mobile version and apps.
     *
     * {"type":"string"}
     */
    public function _ad_platform(string $ad_platform) : self
    {
        $this->params['ad_platform'] = $ad_platform;
        return $this;
    }
    /**
     * URL for the advertised object.
     *
     * {"type":"string"}
     */
    public function link_url(string $link_url) : self
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
    /**
     * Domain of the advertised object.
     *
     * {"type":"string"}
     */
    public function _link_domain(string $link_domain) : self
    {
        $this->params['link_domain'] = $link_domain;
        return $this;
    }
}