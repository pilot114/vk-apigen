<?php

namespace VkApigen\Method;

/**
 * Returns a list of user gifts.
 */
class Gifts_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('gifts.get');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Gifts_Get
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Number of gifts to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : Gifts_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Gifts_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}