<?php

namespace VkApigen\Method\Streaming;

/**
 * Allows to receive data for the connection to Streaming API.
 */
class GetServerUrl extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('streaming.getServerUrl');
    }
}