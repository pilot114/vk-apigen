<?php

namespace VkApigen\Method;

/**
 * Returns a list of users whom the current user has bookmarked.
 */
class Fave_GetUsers extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.getUsers');
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Fave_GetUsers
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : Fave_GetUsers
    {
        $this->params['count'] = $count;
        return $this;
    }
}