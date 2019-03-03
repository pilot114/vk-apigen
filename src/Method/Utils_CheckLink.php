<?php

namespace VkApigen\Method;

/**
 * Checks whether a link is blocked in VK.
 */
class Utils_CheckLink extends \VkApigen\BaseMethod
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
        return $this->onCall('utils.checkLink');
    }
    /**
     * Link to check (e.g., 'http://google.com').
     *
     * {"type":"string"}
     */
    public function url(string $url) : Utils_CheckLink
    {
        $this->params['url'] = $url;
        return $this;
    }
}