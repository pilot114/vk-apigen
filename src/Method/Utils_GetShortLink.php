<?php

namespace VkApigen\Method;

/**
 * Allows to receive a link shortened via vk.cc.
 */
class Utils_GetShortLink extends \VkApigen\BaseMethod
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
        return $this->onCall('utils.getShortLink');
    }
    /**
     * URL to be shortened.
     *
     * {"type":"string"}
     */
    public function url(string $url) : Utils_GetShortLink
    {
        $this->params['url'] = $url;
        return $this;
    }
    /**
     * 1 — private stats, 0 — public stats.
     *
     * {"type":"bool","default":0}
     */
    public function _private(bool $private) : Utils_GetShortLink
    {
        $this->params['private'] = $private;
        return $this;
    }
}