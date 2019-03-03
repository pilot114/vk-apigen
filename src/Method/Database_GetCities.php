<?php

namespace VkApigen\Method;

/**
 * Returns a list of cities.
 */
class Database_GetCities extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getCities');
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function country_id(int $country_id) : Database_GetCities
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * Region ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _region_id(int $region_id) : Database_GetCities
    {
        $this->params['region_id'] = $region_id;
        return $this;
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Database_GetCities
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * '1' — to return all cities in the country, '0' — to return major cities in the country (default),
     *
     * {"type":"bool"}
     */
    public function _need_all(bool $need_all) : Database_GetCities
    {
        $this->params['need_all'] = $need_all;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of cities.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Database_GetCities
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of cities to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : Database_GetCities
    {
        $this->params['count'] = $count;
        return $this;
    }
}