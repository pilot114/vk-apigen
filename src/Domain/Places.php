<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Places
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function add() : Method\Places_Add
    {
        return new Method\Places_Add($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Places_GetById
    {
        return new Method\Places_GetById($this->client, $this->defaultQuery);
    }
    public function search() : Method\Places_Search
    {
        return new Method\Places_Search($this->client, $this->defaultQuery);
    }
    public function checkin() : Method\Places_Checkin
    {
        return new Method\Places_Checkin($this->client, $this->defaultQuery);
    }
    public function getCheckins() : Method\Places_GetCheckins
    {
        return new Method\Places_GetCheckins($this->client, $this->defaultQuery);
    }
    public function getTypes() : Method\Places_GetTypes
    {
        return new Method\Places_GetTypes($this->client, $this->defaultQuery);
    }
}