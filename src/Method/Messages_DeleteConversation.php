<?php

namespace VkApigen\Method;

/**
 * Deletes all private messages in a conversation.
 */
class Messages_DeleteConversation extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.deleteConversation');
    }
    /**
     * User ID. To clear a chat history use 'chat_id'
     *
     * {"type":"string"}
     */
    public function _user_id(string $user_id) : Messages_DeleteConversation
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_DeleteConversation
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_DeleteConversation
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Offset needed to delete a specific subset of conversations.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Messages_DeleteConversation
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of conversations to delete. "NOTE: If the number of messages exceeds the maximum, the method shall be called several times."
     *
     * {"type":"int","minimum":0,"maximum":10000}
     */
    public function _count(int $count) : Messages_DeleteConversation
    {
        $this->params['count'] = $count;
        return $this;
    }
}