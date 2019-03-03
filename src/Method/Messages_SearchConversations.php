<?php

namespace VkApigen\Method;

/**
 * Returns a list of the current user's conversations that match search criteria.
 */
class Messages_SearchConversations extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.searchConversations');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Messages_SearchConversations
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Maximum number of results.
     *
     * {"type":"int","minimum":0,"default":20}
     */
    public function _count(int $count) : Messages_SearchConversations
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — return extra information about users and communities
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Messages_SearchConversations
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_SearchConversations
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_SearchConversations
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}