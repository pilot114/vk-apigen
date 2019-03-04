<?php

namespace VkApigen\Method\Account;

/**
 * Returns the current account info.
 */
class GetProfileInfo extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.getProfileInfo');
    }
}