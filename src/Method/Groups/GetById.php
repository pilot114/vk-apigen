<?php

namespace VkApigen\Method\Groups;

/**
 * Returns information about communities by their IDs.
 */
class GetById extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _group_ids(array $group_ids) : self
    {
        $this->params['group_ids'] = $group_ids;
        return $this;
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"string"}
     */
    public function _group_id(string $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Group fields to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}