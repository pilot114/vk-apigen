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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('messages.deleteChatPhoto');
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
}