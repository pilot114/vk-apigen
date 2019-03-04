<?php

namespace VkApigen\Method\Database;

/**
 * Returns a list of cities.
 */
class GetCities extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function country_id(int $country_id) : self
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * Region ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _region_id(int $region_id) : self
    {
        $this->params['region_id'] = $region_id;
        return $this;
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * '1' — to return all cities in the country, '0' — to return major cities in the country (default),
     *
     * {"type":"bool"}
     */
    public function _need_all(bool $need_all) : self
    {
        $this->params['need_all'] = $need_all;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of cities.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of cities to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}