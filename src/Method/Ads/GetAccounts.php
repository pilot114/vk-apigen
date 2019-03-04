<?php

namespace VkApigen\Method\Ads;

/**
 * Returns a list of advertising accounts.
 */
class GetAccounts extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.getAccounts');
    }
}