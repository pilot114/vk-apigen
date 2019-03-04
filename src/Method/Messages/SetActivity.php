<?php

namespace VkApigen\Method\Messages;

/**
 * Changes the status of a user as typing in a conversation.
 */
class SetActivity extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('messages.setActivity');
    }
    /**
     * User ID.
     *
     * {"type":"string"}
     */
    public function _user_id(string $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * 'typing' — user has started to type.
     *
     * {"type":"string"}
     */
    public function _type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
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