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
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('messages.removeChatUser');
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
     * ID of the user to be removed from the chat.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _member_id(int $member_id) : self
    {
        $this->params['member_id'] = $member_id;
        return $this;
    }
}