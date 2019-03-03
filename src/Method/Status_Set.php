<?php

namespace VkApigen\Method;

/**
 * Sets a new status for the current user.
 */
class Status_Set extends \VkApigen\BaseMethod
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
        return $this->onCall('status.set');
    }
    /**
     * Text of the new status.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Status_Set
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * Identifier of a community to set a status in. If left blank the status is set to current user.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Status_Set
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}