<?php

namespace VkApigen\Method;

/**
 * Allows the current user to leave a chat or, if the current user started the chat, allows the user to remove another user from the chat.
 */
class Messages_RemoveChatUser extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.removeChatUser');
    }
    /**
     * Chat ID.
     *
     * {"type":"int"}
     */
    public function chat_id(int $chat_id) : Messages_RemoveChatUser
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * ID of the user to be removed from the chat.
     *
     * {"type":"string"}
     */
    public function user_id(string $user_id) : Messages_RemoveChatUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}