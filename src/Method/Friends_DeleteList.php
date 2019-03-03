<?php

namespace VkApigen\Method;

/**
 * Deletes a friend list of the current user.
 */
class Friends_DeleteList extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.deleteList');
    }
    /**
     * ID of the friend list to delete.
     *
     * {"type":"int","minimum":0}
     */
    public function list_id(int $list_id) : Friends_DeleteList
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
}