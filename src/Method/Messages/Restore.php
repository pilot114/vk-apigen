<?php

namespace VkApigen\Method\Messages;

/**
 * Restores a deleted message.
 */
class Restore extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.restore');
    }
    /**
     * ID of a previously-deleted message to restore.
     *
     * {"type":"int","minimum":0}
     */
    public function message_id(int $message_id) : self
    {
        $this->params['message_id'] = $message_id;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}