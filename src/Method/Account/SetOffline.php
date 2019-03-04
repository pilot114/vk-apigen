<?php

namespace VkApigen\Method\Account;

/**
 * Marks a current user as offline.
 */
class SetOffline extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.setOffline');
    }
}