<?php

namespace VkApigen\Method\Messages;

/**
 * Returns a list of the current user's conversations.
 */
class GetConversations extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getConversations');
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of conversations.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of conversations to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Filter to apply: 'all' — all conversations, 'unread' — conversations with unread messages, 'important' — conversations, marked as important (only for community messages), 'unanswered' — conversations, marked as unanswered (only for community messages)
     *
     * {"type":"string","default":"all","enum":["all","unread","important","unanswered"]}
     */
    public function _filter(string $filter) : self
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * '1' — return extra information about users and communities
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * ID of the message from what to return dialogs.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_message_id(int $start_message_id) : self
    {
        $this->params['start_message_id'] = $start_message_id;
        return $this;
    }
    /**
     * Profile and communities fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}