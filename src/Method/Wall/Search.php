<?php

namespace VkApigen\Method\Wall;

/**
 * Allows to search posts on user or community walls.
 */
class Search extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.search');
    }
    /**
     * user or community id. "Remember that for a community 'owner_id' must be negative."
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * user or community screen name.
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : self
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * search query string.
     *
     * {"type":"string"}
     */
    public function _query(string $query) : self
    {
        $this->params['query'] = $query;
        return $this;
    }
    /**
     * '1' – returns only page owner's posts.
     *
     * {"type":"bool"}
     */
    public function _owners_only(bool $owners_only) : self
    {
        $this->params['owners_only'] = $owners_only;
        return $this;
    }
    /**
     * count of posts to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
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
     * show extended post info.
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
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}