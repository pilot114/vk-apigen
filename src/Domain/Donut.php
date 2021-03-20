<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Donut
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
    public function getFriends() : Method\Donut\GetFriends
    {
        return new Method\Donut\GetFriends($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSubscription() : Method\Donut\GetSubscription
    {
        return new Method\Donut\GetSubscription($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSubscriptions() : Method\Donut\GetSubscriptions
    {
        return new Method\Donut\GetSubscriptions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function isDon() : Method\Donut\IsDon
    {
        return new Method\Donut\IsDon($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}