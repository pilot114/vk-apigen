<?php

namespace VkApigen\Method;

/**
 * Returns information whether sending messages from the community to current user is allowed.
 */
class Messages_IsMessagesFromGroupAllowed extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.isMessagesFromGroupAllowed');
    }
    /**
     * Group ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Messages_IsMessagesFromGroupAllowed
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Messages_IsMessagesFromGroupAllowed
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}