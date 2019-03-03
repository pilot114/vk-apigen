<?php

namespace VkApigen\Method;

/**
 * Shows history of votes transaction between users and the application.
 */
class Secure_GetTransactionsHistory extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.getTransactionsHistory');
    }
}