<?php

namespace VkApigen\Method\Database;

/**
 * Returns a list of regions.
 */
class GetRegions extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getRegions');
    }
    /**
     * Country ID, received in [vk.com/dev/database.getCountries|database.getCountries] method.
     *
     * {"type":"int","minimum":0}
     */
    public function country_id(int $country_id) : self
    {
        $this->params['country_id'] = $country_id;
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
     * Offset needed to return specific subset of regions.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of regions to return.
     *
     * {"type":"int","default":100,"minimum":0,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}