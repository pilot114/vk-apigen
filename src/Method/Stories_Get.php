<?php

namespace VkApigen\Method;

/**
 * Returns stories available for current user.
 */
class Stories_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.get');
    }
    /**
     * Owner ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Stories_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * '1' — to return additional fields for users and communities. Default value is 0.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Stories_Get
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}