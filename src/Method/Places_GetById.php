<?php

namespace VkApigen\Method;

/**
 * Returns information about locations by their IDs.
 */
class Places_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('places.getById');
    }
    /**
     * Location IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function places(array $places) : Places_GetById
    {
        $this->params['places'] = $places;
        return $this;
    }
}