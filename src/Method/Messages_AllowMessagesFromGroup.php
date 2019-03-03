<?php

namespace VkApigen\Method;

/**
 * Allows sending messages from community to the current user.
 */
class Messages_AllowMessagesFromGroup extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.allowMessagesFromGroup');
    }
    /**
     * Group ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Messages_AllowMessagesFromGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}