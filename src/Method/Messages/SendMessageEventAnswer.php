<?php

namespace VkApigen\Method\Messages;

/**
 * Нет описания
 */
class SendMessageEventAnswer extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['group']);
    }
    public function call()
    {
        return $this->onCall('messages.sendMessageEventAnswer');
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function event_id(string $event_id) : self
    {
        $this->params['event_id'] = $event_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":1000}
     */
    public function _event_data(string $event_data) : self
    {
        $this->params['event_data'] = $event_data;
        return $this;
    }
}