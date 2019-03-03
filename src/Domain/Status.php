<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Status
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Status_Get
    {
        return new Method\Status_Get($this->client, $this->defaultQuery);
    }
    public function set() : Method\Status_Set
    {
        return new Method\Status_Set($this->client, $this->defaultQuery);
    }
}