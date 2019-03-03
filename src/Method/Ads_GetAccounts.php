<?php

namespace VkApigen\Method;

/**
 * Returns a list of advertising accounts.
 */
class Ads_GetAccounts extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getAccounts');
    }
}