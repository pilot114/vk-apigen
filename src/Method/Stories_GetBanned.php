<?php

namespace VkApigen\Method;

/**
 * Returns list of sources hidden from current user's feed.
 */
class Stories_GetBanned extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.getBanned');
    }
    /**
     * Additional fields to return
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Stories_GetBanned
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * '1' — to return additional fields for users and communities. Default value is 0.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Stories_GetBanned
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}