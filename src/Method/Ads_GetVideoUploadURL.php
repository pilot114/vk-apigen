<?php

namespace VkApigen\Method;

/**
 * Returns URL to upload an ad video to.
 */
class Ads_GetVideoUploadURL extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getVideoUploadURL');
    }
}