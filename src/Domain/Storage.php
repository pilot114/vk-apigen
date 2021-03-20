<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Storage
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
    public function get() : Method\Storage\Get
    {
        return new Method\Storage\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getKeys() : Method\Storage\GetKeys
    {
        return new Method\Storage\GetKeys($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function set() : Method\Storage\Set
    {
        return new Method\Storage\Set($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}