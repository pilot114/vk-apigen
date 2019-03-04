<?php

namespace VkApigen\Method\Utils;

/**
 * Checks whether a link is blocked in VK.
 */
class CheckLink extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('utils.checkLink');
    }
    /**
     * Link to check (e.g., 'http://google.com').
     *
     * {"type":"string"}
     */
    public function url(string $url) : self
    {
        $this->params['url'] = $url;
        return $this;
    }
}