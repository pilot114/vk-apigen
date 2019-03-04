<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Likes
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
    public function getList() : Method\Likes\GetList
    {
        return new Method\Likes\GetList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function add() : Method\Likes\Add
    {
        return new Method\Likes\Add($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Likes\Delete
    {
        return new Method\Likes\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function isLiked() : Method\Likes\IsLiked
    {
        return new Method\Likes\IsLiked($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}