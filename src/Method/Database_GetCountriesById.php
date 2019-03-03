<?php

namespace VkApigen\Method;

/**
 * Returns information about countries by their IDs.
 */
class Database_GetCountriesById extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getCountriesById');
    }
    /**
     * Country IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _country_ids(array $country_ids) : Database_GetCountriesById
    {
        $this->params['country_ids'] = $country_ids;
        return $this;
    }
}