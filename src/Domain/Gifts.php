<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Gifts
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
    public function get() : Method\Gifts\Get
    {
        return new Method\Gifts\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}