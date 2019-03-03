<?php

namespace VkApigen\Method;

/**
 * Returns information about communities by their IDs.
 */
class Groups_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.getById');
    }
    /**
     * IDs or screen names of communities.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _group_ids(array $group_ids) : Groups_GetById
    {
        $this->params['group_ids'] = $group_ids;
        return $this;
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"string"}
     */
    public function _group_id(string $group_id) : Groups_GetById
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Group fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Groups_GetById
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}