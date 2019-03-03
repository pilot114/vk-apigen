<?php

namespace VkApigen\Method;

/**
 * Allows to receive data for the connection to Streaming API.
 */
class Streaming_GetServerUrl extends \VkApigen\BaseMethod
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
        return $this->onCall('streaming.getServerUrl');
    }
}