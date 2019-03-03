<?php

namespace VkApigen\Method;

/**
 * Returns a list of all types of locations.
 */
class Places_GetTypes extends \VkApigen\BaseMethod
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
        return $this->onCall('places.getTypes');
    }
}