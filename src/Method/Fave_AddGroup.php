<?php

namespace VkApigen\Method;

/**
 * Adds a community to user faves.
 */
class Fave_AddGroup extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.addGroup');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Fave_AddGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}