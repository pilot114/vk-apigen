<?php

namespace VkApigen\Method\Apps;

/**
 * Returns a list of applications (apps) available to users in the App Catalog.
 */
class GetCatalog extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('apps.getCatalog');
    }
    /**
     * Sort order: 'popular_today' — popular for one day (default), 'visitors' — by visitors number , 'create_date' — by creation date, 'growth_rate' — by growth rate, 'popular_week' — popular for one week
     *
     * {"type":"string","default":"popular_today","enum":["popular_today","visitors","create_date","growth_rate","popular_week"]}
     */
    public function _sort(string $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Offset required to return a specific subset of apps.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of apps to return.
     *
     * {"type":"int","minimum":0,"default":100}
     */
    public function count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _platform(string $platform) : self
    {
        $this->params['platform'] = $platform;
        return $this;
    }
    /**
     * '1' — to return additional fields 'screenshots', 'MAU', 'catalog_position', and 'international'. If set, 'count' must be less than or equal to '100'. '0' — not to return additional fields (default).
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
     * {"type":"bool"}
     */
    public function _return_friends(bool $return_friends) : self
    {
        $this->params['return_friends'] = $return_friends;
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
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _name_case(string $name_case) : self
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _genre_id(int $genre_id) : self
    {
        $this->params['genre_id'] = $genre_id;
        return $this;
    }
    /**
     * 'installed' — to return list of installed apps (only for mobile platform).
     *
     * {"type":"string"}
     */
    public function _filter(string $filter) : self
    {
        $this->params['filter'] = $filter;
        return $this;
    }
}