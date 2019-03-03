<?php

namespace VkApigen\Method;

/**
 * Returns a list of posts on a user wall or community wall.
 */
class Wall_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.get');
    }
    /**
     * ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * User or community short address.
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : Wall_Get
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of posts.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Wall_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of posts to return (maximum 100).
     *
     * {"type":"int","minimum":0,"maximum":100}
     */
    public function _count(int $count) : Wall_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Filter to apply: 'owner' — posts by the wall owner, 'others' — posts by someone else, 'all' — posts by the wall owner and others (default), 'postponed' — timed posts (only available for calls with an 'access_token'), 'suggests' — suggested posts on a community wall
     *
     * {"type":"string","default":"all","enum":["owner","others","all","postponed","suggests"]}
     */
    public function _filter(string $filter) : Wall_Get
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * '1' — to return 'wall', 'profiles', and 'groups' fields, '0' — to return no additional fields (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Wall_Get
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Wall_Get
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}