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
    public function checkPhone() : Method\Auth\CheckPhone
    {
        return new Method\Auth\CheckPhone($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function signup() : Method\Auth\Signup
    {
        return new Method\Auth\Signup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function confirm() : Method\Auth\Confirm
    {
        return new Method\Auth\Confirm($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restore() : Method\Auth\Restore
    {
        return new Method\Auth\Restore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}