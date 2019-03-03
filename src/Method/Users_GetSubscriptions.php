<?php

namespace VkApigen\Method;

/**
 * Returns a list of IDs of users and communities followed by the user.
 */
class Users_GetSubscriptions extends \VkApigen\BaseMethod
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
        return $this->onCall('users.getSubscriptions');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Users_GetSubscriptions
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return a combined list of users and communities, '0' — to return separate lists of users and communities (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Users_GetSubscriptions
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of subscriptions.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Users_GetSubscriptions
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users and communities to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : Users_GetSubscriptions
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Users_GetSubscriptions
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}