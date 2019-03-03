<?php

namespace VkApigen\Method;

/**
 * Deletes a chat's cover picture.
 */
class Messages_DeleteChatPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.deleteChatPhoto');
    }
    /**
     * Chat ID.
     *
     * {"type":"int","minimum":0}
     */
    public function chat_id(int $chat_id) : Messages_DeleteChatPhoto
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
}