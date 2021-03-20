<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Orders
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
    public function cancelSubscription() : Method\Orders\CancelSubscription
    {
        return new Method\Orders\CancelSubscription($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function changeState() : Method\Orders\ChangeState
    {
        return new Method\Orders\ChangeState($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Orders\Get
    {
        return new Method\Orders\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAmount() : Method\Orders\GetAmount
    {
        return new Method\Orders\GetAmount($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Orders\GetById
    {
        return new Method\Orders\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUserSubscriptionById() : Method\Orders\GetUserSubscriptionById
    {
        return new Method\Orders\GetUserSubscriptionById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUserSubscriptions() : Method\Orders\GetUserSubscriptions
    {
        return new Method\Orders\GetUserSubscriptions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function updateSubscription() : Method\Orders\UpdateSubscription
    {
        return new Method\Orders\UpdateSubscription($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}