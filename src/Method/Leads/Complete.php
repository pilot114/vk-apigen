<?php

namespace VkApigen\Method\Leads;

/**
 * Completes the lead started by user.
 */
class Complete extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('leads.complete');
    }
    /**
     * Session obtained as GET parameter when session started.
     *
     * {"type":"string"}
     */
    public function vk_sid(string $vk_sid) : self
    {
        $this->params['vk_sid'] = $vk_sid;
        return $this;
    }
    /**
     * Secret key from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : self
    {
        $this->params['secret'] = $secret;
        return $this;
    }
    /**
     * Comment text.
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : self
    {
        $this->params['comment'] = $comment;
        return $this;
    }
}