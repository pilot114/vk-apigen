<?php

namespace VkApigen\Method;

/**
 * Returns payment balance of the application in hundredth of a vote.
 */
class Secure_GetAppBalance extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.getAppBalance');
    }
}