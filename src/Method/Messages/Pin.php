<?php

namespace VkApigen\Method\Messages;

/**
 * Pin a message.
 */
class Pin extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('messages.pin');
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Message ID
     *
     * {"type":"int","minimum":0}
     */
    public function _message_id(int $message_id) : self
    {
        $this->params['message_id'] = $message_id;
        return $this;
    }
    /**
     * Conversation message ID
     *
     * {"type":"int","minimum":0}
     */
    public function _conversation_message_id(int $conversation_message_id) : self
    {
        $this->params['conversation_message_id'] = $conversation_message_id;
        return $this;
    }
}