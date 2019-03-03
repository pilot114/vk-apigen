<?php

namespace VkApigen\Method;

/**
 * Returns message history for the specified user or group chat.
 */
class Messages_GetHistory extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getHistory');
    }
    /**
     * Offset needed to return a specific subset of messages.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Messages_GetHistory
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of messages to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : Messages_GetHistory
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * ID of the user whose message history you want to return.
     *
     * {"type":"int"}
     */
    public function _user_id(int $user_id) : Messages_GetHistory
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_GetHistory
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Starting message ID from which to return history.
     *
     * {"type":"int"}
     */
    public function _start_message_id(int $start_message_id) : Messages_GetHistory
    {
        $this->params['start_message_id'] = $start_message_id;
        return $this;
    }
    /**
     * Information whether the response should be extended
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Messages_GetHistory
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetHistory
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetHistory
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Sort order: '1' — return messages in chronological order. '0' — return messages in reverse chronological order.
     *
     * {"type":"int","enum":[1,0],"enumNames":["chronological","reverse chronological"]}
     */
    public function _rev(int $rev) : Messages_GetHistory
    {
        $this->params['rev'] = $rev;
        return $this;
    }
}