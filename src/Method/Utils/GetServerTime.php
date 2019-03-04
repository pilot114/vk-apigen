<?php

namespace VkApigen\Method\Utils;

/**
 * Returns the current time of the VK server.
 */
class GetServerTime extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('utils.getServerTime');
    }
}