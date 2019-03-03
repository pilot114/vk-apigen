<?php

namespace VkApigen\Method;

/**
 * Returns updates in user's private messages.
 */
class Messages_GetLongPollHistory extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getLongPollHistory');
    }
    /**
     * Last value of the 'ts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"int","minimum":0}
     */
    public function _ts(int $ts) : Messages_GetLongPollHistory
    {
        $this->params['ts'] = $ts;
        return $this;
    }
    /**
     * Lsat value of 'pts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"int","minimum":0}
     */
    public function _pts(int $pts) : Messages_GetLongPollHistory
    {
        $this->params['pts'] = $pts;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'. "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"int","minimum":0}
     */
    public function _preview_length(int $preview_length) : Messages_GetLongPollHistory
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * '1' — to return history with online users only.
     *
     * {"type":"bool"}
     */
    public function _onlines(bool $onlines) : Messages_GetLongPollHistory
    {
        $this->params['onlines'] = $onlines;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return.
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _fields(array $fields) : Messages_GetLongPollHistory
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Maximum number of events to return.
     *
     * {"type":"int","minimum":1000,"default":1000}
     */
    public function _events_limit(int $events_limit) : Messages_GetLongPollHistory
    {
        $this->params['events_limit'] = $events_limit;
        return $this;
    }
    /**
     * Maximum number of messages to return.
     *
     * {"type":"int","minimum":200,"default":200}
     */
    public function _msgs_limit(int $msgs_limit) : Messages_GetLongPollHistory
    {
        $this->params['msgs_limit'] = $msgs_limit;
        return $this;
    }
    /**
     * Maximum ID of the message among existing ones in the local copy. Both messages received with API methods (for example, , ), and data received from a Long Poll server (events with code 4) are taken into account.
     *
     * {"type":"int","minimum":0}
     */
    public function _max_msg_id(int $max_msg_id) : Messages_GetLongPollHistory
    {
        $this->params['max_msg_id'] = $max_msg_id;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetLongPollHistory
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}