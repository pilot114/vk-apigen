<?php

namespace VkApigen\Method\Stories;

/**
 * Нет описания
 */
class SendInteraction extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['service']);
    }
    public function call()
    {
        return $this->onCall('stories.sendInteraction');
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function access_key(string $access_key) : self
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":1000}
     */
    public function _message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
     */
    public function _is_broadcast(bool $is_broadcast) : self
    {
        $this->params['is_broadcast'] = $is_broadcast;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
     */
    public function _is_anonymous(bool $is_anonymous) : self
    {
        $this->params['is_anonymous'] = $is_anonymous;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
     */
    public function _unseen_marker(bool $unseen_marker) : self
    {
        $this->params['unseen_marker'] = $unseen_marker;
        return $this;
    }
}