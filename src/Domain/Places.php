<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Places
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
    public function add() : Method\Places\Add
    {
        return new Method\Places\Add($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Places\GetById
    {
        return new Method\Places\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Places\Search
    {
        return new Method\Places\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function checkin() : Method\Places\Checkin
    {
        return new Method\Places\Checkin($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCheckins() : Method\Places\GetCheckins
    {
        return new Method\Places\GetCheckins($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTypes() : Method\Places\GetTypes
    {
        return new Method\Places\GetTypes($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}