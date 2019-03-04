<?php

namespace VkApigen\Method\Messages;

/**
 * Allows the current user to leave a chat or, if the current user started the chat, allows the user to remove another user from the chat.
 */
class RemoveChatUser extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function chat_id(int $chat_id) : self
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * ID of the user to be removed from the chat.
     *
     * {"type":"string"}
     */
    public function user_id(string $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}