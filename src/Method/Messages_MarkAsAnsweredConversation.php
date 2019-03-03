<?php

namespace VkApigen\Method;

/**
 * Marks and unmarks conversations as unanswered.
 */
class Messages_MarkAsAnsweredConversation extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.markAsAnsweredConversation');
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_MarkAsAnsweredConversation
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * ID of conversation to mark as important.
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : Messages_MarkAsAnsweredConversation
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * '1' — to mark as answered, '0' — to remove the mark
     *
     * {"type":"bool","default":1}
     */
    public function _answered(bool $answered) : Messages_MarkAsAnsweredConversation
    {
        $this->params['answered'] = $answered;
        return $this;
    }
}