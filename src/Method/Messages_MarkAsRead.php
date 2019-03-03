<?php

namespace VkApigen\Method;

/**
 * Marks messages as read.
 */
class Messages_MarkAsRead extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.markAsRead');
    }
    /**
     * IDs of messages to mark as read.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _message_ids(array $message_ids) : Messages_MarkAsRead
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_MarkAsRead
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Message ID to start from.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_message_id(int $start_message_id) : Messages_MarkAsRead
    {
        $this->params['start_message_id'] = $start_message_id;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_MarkAsRead
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}