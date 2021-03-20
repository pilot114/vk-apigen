<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Auth
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
    public function restore() : Method\Auth\Restore
    {
        return new Method\Auth\Restore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}