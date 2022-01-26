<?php

namespace VkApigen\Method\Wall;

/**
 * Returns a list of posts on a user wall or community wall.
 */
class Get extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user', 'service']);
    }
    public function call()
    {
        return $this->onCall('wall.get');
    }
    /**
     * ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * User or community short address.
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : self
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of posts.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of posts to return (maximum 100).
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","$ref":"objects.json#\/definitions\/wall_get_filter"}
     */
    public function _filter(string $filter) : self
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * '1' — to return 'wall', 'profiles', and 'groups' fields, '0' — to return no additional fields (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/base_user_group_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}