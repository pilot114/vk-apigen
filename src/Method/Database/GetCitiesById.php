<?php

namespace VkApigen\Method\Database;

/**
 * Returns information about cities by their IDs.
 */
class GetCitiesById extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getCitiesById');
    }
    /**
     * City IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _city_ids(array $city_ids) : self
    {
        $this->params['city_ids'] = $city_ids;
        return $this;
    }
}