<?php

namespace VkApigen\Method;

/**
 * Returns conversations by their IDs
 */
class Messages_GetConversationsById extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getConversationsById');
    }
    /**
     * Destination IDs. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"array","items":{"type":"integer"},"maxItems":100}
     */
    public function peer_ids(array $peer_ids) : Messages_GetConversationsById
    {
        $this->params['peer_ids'] = $peer_ids;
        return $this;
    }
    /**
     * Return extended properties
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Messages_GetConversationsById
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Profile and communities fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetConversationsById
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetConversationsById
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}