<?php

namespace VkApigen\Method;

/**
 * Returns a list of user IDs of a user's friends who are online.
 */
class Friends_GetOnline extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getOnline');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Friends_GetOnline
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Friend list ID. If this parameter is not set, information about all online friends is returned.
     *
     * {"type":"int","minimum":0}
     */
    public function _list_id(int $list_id) : Friends_GetOnline
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'online_mobile' field, '0' — (default),
     *
     * {"type":"bool"}
     */
    public function _online_mobile(bool $online_mobile) : Friends_GetOnline
    {
        $this->params['online_mobile'] = $online_mobile;
        return $this;
    }
    /**
     * Sort order: 'random' — random order
     *
     * {"type":"string"}
     */
    public function _order(string $order) : Friends_GetOnline
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * Number of friends to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : Friends_GetOnline
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of friends.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Friends_GetOnline
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}