<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Docs
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
    public function get() : Method\Docs\Get
    {
        return new Method\Docs\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Docs\GetById
    {
        return new Method\Docs\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUploadServer() : Method\Docs\GetUploadServer
    {
        return new Method\Docs\GetUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getWallUploadServer() : Method\Docs\GetWallUploadServer
    {
        return new Method\Docs\GetWallUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMessagesUploadServer() : Method\Docs\GetMessagesUploadServer
    {
        return new Method\Docs\GetMessagesUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function save() : Method\Docs\Save
    {
        return new Method\Docs\Save($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Docs\Delete
    {
        return new Method\Docs\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function add() : Method\Docs\Add
    {
        return new Method\Docs\Add($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTypes() : Method\Docs\GetTypes
    {
        return new Method\Docs\GetTypes($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Docs\Search
    {
        return new Method\Docs\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Docs\Edit
    {
        return new Method\Docs\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}