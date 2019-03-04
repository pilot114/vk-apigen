<?php

namespace VkApigen\Method\Pages;

/**
 * Allows to clear the cache of particular 'external' pages which may be attached to VK posts.
 */
class ClearCache extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('pages.clearCache');
    }
    /**
     * Address of the page where you need to refesh the cached version
     *
     * {"type":"string"}
     */
    public function url(string $url) : self
    {
        $this->params['url'] = $url;
        return $this;
    }
}