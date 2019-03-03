<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Storage
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Storage_Get
    {
        return new Method\Storage_Get($this->client, $this->defaultQuery);
    }
    public function set() : Method\Storage_Set
    {
        return new Method\Storage_Set($this->client, $this->defaultQuery);
    }
    public function getKeys() : Method\Storage_GetKeys
    {
        return new Method\Storage_GetKeys($this->client, $this->defaultQuery);
    }
}