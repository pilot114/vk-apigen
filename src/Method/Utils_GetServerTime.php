<?php

namespace VkApigen\Method;

/**
 * Returns the current time of the VK server.
 */
class Utils_GetServerTime extends \VkApigen\BaseMethod
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
        return $this->onCall('utils.getServerTime');
    }
}