<?php

namespace VkApigen\Method\Messages;

/**
 * Marks and unmarks conversations as unanswered.
 */
class MarkAsAnsweredConversation extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('messages.markAsAnsweredConversation');
    }
    /**
     * ID of conversation to mark as important.
     *
     * {"type":"int"}
     */
    public function peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * '1' — to mark as answered, '0' — to remove the mark
     *
     * {"type":"bool","default":1}
     */
    public function _answered(bool $answered) : self
    {
        $this->params['answered'] = $answered;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}