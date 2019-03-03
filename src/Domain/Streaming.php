<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Streaming
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getServerUrl() : Method\Streaming_GetServerUrl
    {
        return new Method\Streaming_GetServerUrl($this->client, $this->defaultQuery);
    }
}