<?php

namespace VkApigen\Method;

/**
 * Returns information about cities by their IDs.
 */
class Database_GetCitiesById extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getCitiesById');
    }
    /**
     * City IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _city_ids(array $city_ids) : Database_GetCitiesById
    {
        $this->params['city_ids'] = $city_ids;
        return $this;
    }
}