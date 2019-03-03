<?php

namespace VkApigen\Method;

/**
 * Creates a new friend list for the current user.
 */
class Friends_AddList extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.addList');
    }
    /**
     * Name of the friend list.
     *
     * {"type":"string"}
     */
    public function name(string $name) : Friends_AddList
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * IDs of users to be added to the friend list.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : Friends_AddList
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
}