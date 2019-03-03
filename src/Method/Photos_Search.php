<?php

namespace VkApigen\Method;

/**
 * Returns a list of photos.
 */
class Photos_Search extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.search');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Photos_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _lat(float $lat) : Photos_Search
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Geographical longitude, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _long(float $long) : Photos_Search
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : Photos_Search
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int","minimum":0}
     */
    public function _end_time(int $end_time) : Photos_Search
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
    /**
     * Sort order:
     *
     * {"type":"int","minimum":0}
     */
    public function _sort(int $sort) : Photos_Search
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of photos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Photos_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : Photos_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Radius of search in meters (works very approximately). Available values: '10', '100', '800', '6000', '50000'.
     *
     * {"type":"int","minimum":0,"default":5000}
     */
    public function _radius(int $radius) : Photos_Search
    {
        $this->params['radius'] = $radius;
        return $this;
    }
}