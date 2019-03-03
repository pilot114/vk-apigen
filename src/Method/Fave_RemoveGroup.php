<?php

namespace VkApigen\Method;

/**
 * Removes a community from user faves.
 */
class Fave_RemoveGroup extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.removeGroup');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Fave_RemoveGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}