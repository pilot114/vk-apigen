<?php

namespace VkApigen\Method\Places;

/**
 * Returns a list of locations that match the search criteria.
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
        return $this->onCall('places.search');
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
     * City ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _city(int $city) : self
    {
        $this->params['city'] = $city;
        return $this;
    }
    /**
     * Geographical latitude of the initial search point, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude of the initial search point, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Radius of the search zone: '1' — 100 m. (default), '2' — 800 m. '3' — 6 km. '4' — 50 km.
     *
     * {"type":"int","minimum":0,"default":0,"enum":[1,2,3,4],"enumNames":["100 m","800 m","6 km","50 km"]}
     */
    public function _radius(int $radius) : self
    {
        $this->params['radius'] = $radius;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of locations.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of locations to return.
     *
     * {"type":"int","minimum":0,"default":30,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}