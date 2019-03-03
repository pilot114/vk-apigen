<?php

namespace VkApigen\Method;

/**
 * Returns data required to show the status of a user or community.
 */
class Status_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('status.get');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _user_id(int $user_id) : Status_Get
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Status_Get
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}