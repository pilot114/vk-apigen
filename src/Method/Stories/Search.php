<?php

namespace VkApigen\Method\Stories;

/**
 * Нет описания
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('stories.search');
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":255}
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
    public function _place_id(int $place_id) : self
    {
        $this->params['place_id'] = $place_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float"}
     */
    public function _latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float"}
     */
    public function _longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _radius(int $radius) : self
    {
        $this->params['radius'] = $radius;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _mentioned_id(int $mentioned_id) : self
    {
        $this->params['mentioned_id'] = $mentioned_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":20,"minimum":1,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
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