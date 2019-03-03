<?php

namespace VkApigen\Method;

/**
 * Returns a list of applications (apps) available to users in the App Catalog.
 */
class Apps_GetCatalog extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getCatalog');
    }
    /**
     * Sort order: 'popular_today' — popular for one day (default), 'visitors' — by visitors number , 'create_date' — by creation date, 'growth_rate' — by growth rate, 'popular_week' — popular for one week
     *
     * {"type":"string","default":"popular_today","enum":["popular_today","visitors","create_date","growth_rate","popular_week"]}
     */
    public function _sort(string $sort) : Apps_GetCatalog
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Offset required to return a specific subset of apps.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Apps_GetCatalog
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of apps to return.
     *
     * {"type":"int","minimum":0,"default":100}
     */
    public function count(int $count) : Apps_GetCatalog
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _platform(string $platform) : Apps_GetCatalog
    {
        $this->params['platform'] = $platform;
        return $this;
    }
    /**
     * '1' — to return additional fields 'screenshots', 'MAU', 'catalog_position', and 'international'. If set, 'count' must be less than or equal to '100'. '0' — not to return additional fields (default).
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Apps_GetCatalog
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _return_friends(bool $return_friends) : Apps_GetCatalog
    {
        $this->params['return_friends'] = $return_friends;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Apps_GetCatalog
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _name_case(string $name_case) : Apps_GetCatalog
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Apps_GetCatalog
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _genre_id(int $genre_id) : Apps_GetCatalog
    {
        $this->params['genre_id'] = $genre_id;
        return $this;
    }
    /**
     * 'installed' — to return list of installed apps (only for mobile platform).
     *
     * {"type":"string"}
     */
    public function _filter(string $filter) : Apps_GetCatalog
    {
        $this->params['filter'] = $filter;
        return $this;
    }
}