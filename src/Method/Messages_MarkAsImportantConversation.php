<?php

namespace VkApigen\Method;

/**
 * Marks and unmarks conversations as important.
 */
class Messages_MarkAsImportantConversation extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.markAsImportantConversation');
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_MarkAsImportantConversation
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * ID of conversation to mark as important.
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : Messages_MarkAsImportantConversation
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * '1' — to add a star (mark as important), '0' — to remove the star
     *
     * {"type":"bool","default":1}
     */
    public function _important(bool $important) : Messages_MarkAsImportantConversation
    {
        $this->params['important'] = $important;
        return $this;
    }
}