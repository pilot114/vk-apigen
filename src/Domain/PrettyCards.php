<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class PrettyCards
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
    public function create() : Method\PrettyCards\Create
    {
        return new Method\PrettyCards\Create($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\PrettyCards\Delete
    {
        return new Method\PrettyCards\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\PrettyCards\Edit
    {
        return new Method\PrettyCards\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\PrettyCards\Get
    {
        return new Method\PrettyCards\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\PrettyCards\GetById
    {
        return new Method\PrettyCards\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUploadURL() : Method\PrettyCards\GetUploadURL
    {
        return new Method\PrettyCards\GetUploadURL($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}