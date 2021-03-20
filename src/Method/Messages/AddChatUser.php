<?php

namespace VkApigen\Method\Messages;

/**
 * Adds a new user to a chat.
 */
class AddChatUser extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('messages.addChatUser');
    }
    /**
     * Chat ID.
     *
     * {"type":"int","minimum":0,"maximum":100000000}
     */
    public function chat_id(int $chat_id) : self
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * ID of the user to be added to the chat.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0,"maximum":1000}
     */
    public function _visible_messages_count(int $visible_messages_count) : self
    {
        $this->params['visible_messages_count'] = $visible_messages_count;
        return $this;
    }
}