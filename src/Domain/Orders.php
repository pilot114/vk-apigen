<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Orders
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Orders_Get
    {
        return new Method\Orders_Get($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Orders_GetById
    {
        return new Method\Orders_GetById($this->client, $this->defaultQuery);
    }
    public function changeState() : Method\Orders_ChangeState
    {
        return new Method\Orders_ChangeState($this->client, $this->defaultQuery);
    }
    public function getAmount() : Method\Orders_GetAmount
    {
        return new Method\Orders_GetAmount($this->client, $this->defaultQuery);
    }
}