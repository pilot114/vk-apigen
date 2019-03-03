<?php

namespace VkApigen\Method;

/**
 * Edits the title of a chat.
 */
class Messages_EditChat extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.editChat');
    }
    /**
     * Chat ID.
     *
     * {"type":"int"}
     */
    public function chat_id(int $chat_id) : Messages_EditChat
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * New title of the chat.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Messages_EditChat
    {
        $this->params['title'] = $title;
        return $this;
    }
}