<?php

namespace VkApigen\Method\Ads;

/**
 * Returns URL to upload an ad photo to.
 */
class GetUploadURL extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.getUploadURL');
    }
    /**
     * Ad format: *1 — image and text,, *2 — big image,, *3 — exclusive format,, *4 — community, square image,, *7 — special app format.
     *
     * {"type":"int","enum":[1,2,3,4,7],"enumNames":["image and text","big image","exclusive format","community, square image","special app format"]}
     */
    public function ad_format(int $ad_format) : self
    {
        $this->params['ad_format'] = $ad_format;
        return $this;
    }
}