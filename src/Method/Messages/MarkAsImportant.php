<?php

namespace VkApigen\Method\Messages;

/**
 * Marks and unmarks messages as important (starred).
 */
class MarkAsImportant extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _message_ids(array $message_ids) : self
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * '1' — to add a star (mark as important), '0' — to remove the star
     *
     * {"type":"bool"}
     */
    public function _important(bool $important) : self
    {
        $this->params['important'] = $important;
        return $this;
    }
}