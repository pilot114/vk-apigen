<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Streaming
{
    protected $client;
    protected $defaultQuery;
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getServerUrl() : Method\Streaming\GetServerUrl
    {
        return new Method\Streaming\GetServerUrl($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}