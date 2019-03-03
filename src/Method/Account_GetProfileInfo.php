<?php

namespace VkApigen\Method;

/**
 * Returns the current account info.
 */
class Account_GetProfileInfo extends \VkApigen\BaseMethod
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
        return $this->onCall('account.getProfileInfo');
    }
}