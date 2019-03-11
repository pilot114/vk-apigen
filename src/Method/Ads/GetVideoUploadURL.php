<?php

namespace VkApigen\Method\Ads;

/**
 * Returns URL to upload an ad video to.
 */
class GetVideoUploadURL extends \VkApigen\BaseMethod
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
        return 1;
    }
    public function call()
    {
        return $this->onCall('ads.getVideoUploadURL');
    }
}