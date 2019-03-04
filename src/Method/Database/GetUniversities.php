<?php

namespace VkApigen\Method\Database;

/**
 * Returns a list of higher education institutions.
 */
class GetUniversities extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _country_id(int $country_id) : self
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _city_id(int $city_id) : self
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of universities.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of universities to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}