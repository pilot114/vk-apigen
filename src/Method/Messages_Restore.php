<?php

namespace VkApigen\Method;

/**
 * Restores a deleted message.
 */
class Messages_Restore extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.restore');
    }
    /**
     * ID of a previously-deleted message to restore.
     *
     * {"type":"int","minimum":0}
     */
    public function message_id(int $message_id) : Messages_Restore
    {
        $this->params['message_id'] = $message_id;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_Restore
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}