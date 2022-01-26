<?php

namespace VkApigen\Method\Market;

/**
 * Нет описания
 */
class SearchItems extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('market.searchItems');
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":30,"minimum":0,"maximum":300}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _category_id(int $category_id) : self
    {
        $this->params['category_id'] = $category_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _price_from(int $price_from) : self
    {
        $this->params['price_from'] = $price_from;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _price_to(int $price_to) : self
    {
        $this->params['price_to'] = $price_to;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":3,"enum":[1,2,3],"enumNames":["date","price","relevance"]}
     */
    public function _sort_by(int $sort_by) : self
    {
        $this->params['sort_by'] = $sort_by;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":1,"enum":[0,1]}
     */
    public function _sort_direction(int $sort_direction) : self
    {
        $this->params['sort_direction'] = $sort_direction;
        return $this;
    }
}