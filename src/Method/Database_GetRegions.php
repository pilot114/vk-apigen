<?php

namespace VkApigen\Method;

/**
 * Returns a list of regions.
 */
class Database_GetRegions extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getRegions');
    }
    /**
     * Country ID, received in [vk.com/dev/database.getCountries|database.getCountries] method.
     *
     * {"type":"int","minimum":0}
     */
    public function country_id(int $country_id) : Database_GetRegions
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Database_GetRegions
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Offset needed to return specific subset of regions.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Database_GetRegions
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of regions to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : Database_GetRegions
    {
        $this->params['count'] = $count;
        return $this;
    }
}