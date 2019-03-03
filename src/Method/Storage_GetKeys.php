<?php

namespace VkApigen\Method;

/**
 * Returns the names of all variables.
 */
class Storage_GetKeys extends \VkApigen\BaseMethod
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
        return $this->onCall('storage.getKeys');
    }
    /**
     * user id, whose variables names are returned if they were requested with a server method.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Storage_GetKeys
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * amount of variable names the info needs to be collected from.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(int $count) : Storage_GetKeys
    {
        $this->params['count'] = $count;
        return $this;
    }
}