<?php

namespace VkApigen\Method;

/**
 * With this method you can leave a group, public page, or event.
 */
class Groups_Leave extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.leave');
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_Leave
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}