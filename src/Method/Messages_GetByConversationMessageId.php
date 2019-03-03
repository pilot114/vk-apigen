<?php

namespace VkApigen\Method;

/**
 * Returns messages by their IDs within the conversation.
 */
class Messages_GetByConversationMessageId extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getByConversationMessageId');
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'chat_id', e.g. '2000000001'. For community: '- community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_GetByConversationMessageId
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Conversation message IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":100}
     */
    public function conversation_message_ids(array $conversation_message_ids) : Messages_GetByConversationMessageId
    {
        $this->params['conversation_message_ids'] = $conversation_message_ids;
        return $this;
    }
    /**
     * Information whether the response should be extended
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Messages_GetByConversationMessageId
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetByConversationMessageId
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetByConversationMessageId
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}