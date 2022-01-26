<?php

namespace VkApigen\Method\Messages;

/**
 * Deletes one or more messages.
 */
class Delete extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.delete');
    }
    /**
     * Message IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _message_ids(array $message_ids) : self
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * '1' — to mark message as spam.
     *
     * {"type":"bool"}
     */
    public function _spam(bool $spam) : self
    {
        $this->params['spam'] = $spam;
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
    /**
     * '1' — delete message for for all.
     *
     * {"type":"bool","default":false}
     */
    public function _delete_for_all(bool $delete_for_all) : self
    {
        $this->params['delete_for_all'] = $delete_for_all;
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
     * Conversation message IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":100}
     */
    public function _cmids(array $cmids) : self
    {
        $this->params['cmids'] = $cmids;
        return $this;
    }
}