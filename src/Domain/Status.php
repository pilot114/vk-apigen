<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Status
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
    public function get() : Method\Status\Get
    {
        return new Method\Status\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function set() : Method\Status\Set
    {
        return new Method\Status\Set($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}