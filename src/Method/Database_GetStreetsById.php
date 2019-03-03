<?php

namespace VkApigen\Method;

/**
 * Returns information about streets by their IDs.
 */
class Database_GetStreetsById extends \VkApigen\BaseMethod
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
        return $this->onCall('database.getStreetsById');
    }
    /**
     * Street IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function street_ids(array $street_ids) : Database_GetStreetsById
    {
        $this->params['street_ids'] = $street_ids;
        return $this;
    }
}