<?php

namespace VkApigen\Method;

/**
 * Returns a list of users on a community blacklist.
 */
class Groups_GetBanned extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.getBanned');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_GetBanned
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Groups_GetBanned
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : Groups_GetBanned
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Groups_GetBanned
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Groups_GetBanned
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}