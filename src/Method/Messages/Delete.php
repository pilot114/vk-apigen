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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('messages.delete');
    }
    /**
     * Message IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
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
     * '1' — delete message for for all.
     *
     * {"type":"bool"}
     */
    public function _delete_for_all(bool $delete_for_all) : self
    {
        $this->params['delete_for_all'] = $delete_for_all;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}