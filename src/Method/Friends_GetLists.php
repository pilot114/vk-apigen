<?php

namespace VkApigen\Method;

/**
 * Returns a list of the user's friend lists.
 */
class Friends_GetLists extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getLists');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Friends_GetLists
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return system friend lists. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _return_system(bool $return_system) : Friends_GetLists
    {
        $this->params['return_system'] = $return_system;
        return $this;
    }
}