<?php

namespace VkApigen\Method;

/**
 * Returns a list of locations that match the search criteria.
 */
class Places_Search extends \VkApigen\BaseMethod
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
        return $this->onCall('places.search');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Places_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _city(int $city) : Places_Search
    {
        $this->params['city'] = $city;
        return $this;
    }
    /**
     * Geographical latitude of the initial search point, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function latitude(float $latitude) : Places_Search
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude of the initial search point, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function longitude(float $longitude) : Places_Search
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Radius of the search zone: '1' — 100 m. (default), '2' — 800 m. '3' — 6 km. '4' — 50 km.
     *
     * {"type":"int","minimum":0,"default":0,"enum":[1,2,3,4],"enumNames":["100 m","800 m","6 km","50 km"]}
     */
    public function _radius(int $radius) : Places_Search
    {
        $this->params['radius'] = $radius;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of locations.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Places_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of locations to return.
     *
     * {"type":"int","minimum":0,"default":30,"maximum":1000}
     */
    public function _count(int $count) : Places_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
}