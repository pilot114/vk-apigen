<?php

namespace VkApigen\Method;

/**
 * Returns a list of higher education institutions.
 */
class Database_GetUniversities extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getUniversities');
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Database_GetUniversities
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _country_id(int $country_id) : Database_GetUniversities
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _city_id(int $city_id) : Database_GetUniversities
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of universities.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Database_GetUniversities
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of universities to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(int $count) : Database_GetUniversities
    {
        $this->params['count'] = $count;
        return $this;
    }
}