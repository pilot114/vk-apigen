<?php

namespace VkApigen\Method\Database;

/**
 * Returns information about countries by their IDs.
 */
class GetCountriesById extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('database.getCountriesById');
    }
    /**
     * Country IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _country_ids(array $country_ids) : self
    {
        $this->params['country_ids'] = $country_ids;
        return $this;
    }
}