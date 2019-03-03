<?php

namespace VkApigen\Method;

/**
 * Returns messages by their IDs.
 */
class Messages_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getById');
    }
    /**
     * Message IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":100}
     */
    public function message_ids(array $message_ids) : Messages_GetById
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'. "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"int","minimum":0}
     */
    public function _preview_length(int $preview_length) : Messages_GetById
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * Information whether the response should be extended
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Messages_GetById
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_GetById
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Group ID (for group messages with group access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetById
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}