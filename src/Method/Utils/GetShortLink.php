<?php

namespace VkApigen\Method\Utils;

/**
 * Allows to receive a link shortened via vk.cc.
 */
class GetShortLink extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group', 'service']);
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
    public function url(string $url) : self
    {
        $this->params['url'] = $url;
        return $this;
    }
    /**
     * 1 — private stats, 0 — public stats.
     *
     * {"type":"bool","default":false}
     */
    public function _private(bool $private) : self
    {
        $this->params['private'] = $private;
        return $this;
    }
}