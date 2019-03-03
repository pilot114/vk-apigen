<?php

namespace VkApigen\Method;

/**
 * Adds a new user to a chat.
 */
class Messages_AddChatUser extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.addChatUser');
    }
    /**
     * Chat ID.
     *
     * {"type":"int","minimum":0}
     */
    public function chat_id(int $chat_id) : Messages_AddChatUser
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * ID of the user to be added to the chat.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Messages_AddChatUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}