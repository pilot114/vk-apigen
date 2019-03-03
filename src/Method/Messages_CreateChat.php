<?php

namespace VkApigen\Method;

/**
 * Creates a chat with several participants.
 */
class Messages_CreateChat extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.createChat');
    }
    /**
     * IDs of the users to be added to the chat.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function user_ids(array $user_ids) : Messages_CreateChat
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Chat title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Messages_CreateChat
    {
        $this->params['title'] = $title;
        return $this;
    }
}