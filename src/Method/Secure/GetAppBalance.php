<?php

namespace VkApigen\Method\Secure;

/**
 * Returns payment balance of the application in hundredth of a vote.
 */
class GetAppBalance extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('secure.getAppBalance');
    }
}