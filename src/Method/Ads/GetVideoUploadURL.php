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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.getVideoUploadURL');
    }
}