<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Gifts
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Gifts_Get
    {
        return new Method\Gifts_Get($this->client, $this->defaultQuery);
    }
}