<?php

namespace VkApigen\Method\Secure;

/**
 * Shows history of votes transaction between users and the application.
 */
class GetTransactionsHistory extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('secure.getTransactionsHistory');
    }
}