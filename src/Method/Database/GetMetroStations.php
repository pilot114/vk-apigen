<?php

namespace VkApigen\Method\Database;

/**
 * Get metro stations by city
 */
class GetMetroStations extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getMetroStations');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function city_id(int $city_id) : self
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":100,"minimum":0,"maximum":500}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":false}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}