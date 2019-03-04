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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('messages.addChatUser');
    }
    /**
     * Chat ID.
     *
     * {"type":"int","minimum":0}
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
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}