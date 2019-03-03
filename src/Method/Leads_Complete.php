<?php

namespace VkApigen\Method;

/**
 * Completes the lead started by user.
 */
class Leads_Complete extends \VkApigen\BaseMethod
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
        return $this->onCall('leads.complete');
    }
    /**
     * Session obtained as GET parameter when session started.
     *
     * {"type":"string"}
     */
    public function vk_sid(string $vk_sid) : Leads_Complete
    {
        $this->params['vk_sid'] = $vk_sid;
        return $this;
    }
    /**
     * Secret key from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : Leads_Complete
    {
        $this->params['secret'] = $secret;
        return $this;
    }
    /**
     * Comment text.
     *
     * {"type":"string"}
     */
    public function _comment(string $comment) : Leads_Complete
    {
        $this->params['comment'] = $comment;
        return $this;
    }
}