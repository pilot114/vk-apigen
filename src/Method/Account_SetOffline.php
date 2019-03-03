<?php

namespace VkApigen\Method;

/**
 * Marks a current user as offline.
 */
class Account_SetOffline extends \VkApigen\BaseMethod
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
        return $this->onCall('account.setOffline');
    }
}