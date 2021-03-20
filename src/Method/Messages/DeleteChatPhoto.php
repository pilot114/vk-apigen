<?php

namespace VkApigen\Method\Messages;

/**
 * Deletes a chat's cover picture.
 */
class DeleteChatPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.deleteChatPhoto');
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
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}