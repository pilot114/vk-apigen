<?php

namespace VkApigen\Method;

/**
 * Denies sending message from community to the current user.
 */
class Messages_DenyMessagesFromGroup extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.denyMessagesFromGroup');
    }
    /**
     * Group ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Messages_DenyMessagesFromGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}