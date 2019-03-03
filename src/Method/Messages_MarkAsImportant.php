<?php

namespace VkApigen\Method;

/**
 * Marks and unmarks messages as important (starred).
 */
class Messages_MarkAsImportant extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.markAsImportant');
    }
    /**
     * IDs of messages to mark as important.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _message_ids(array $message_ids) : Messages_MarkAsImportant
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * '1' — to add a star (mark as important), '0' — to remove the star
     *
     * {"type":"bool"}
     */
    public function _important(bool $important) : Messages_MarkAsImportant
    {
        $this->params['important'] = $important;
        return $this;
    }
}