<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Likes
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getList() : Method\Likes_GetList
    {
        return new Method\Likes_GetList($this->client, $this->defaultQuery);
    }
    public function add() : Method\Likes_Add
    {
        return new Method\Likes_Add($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Likes_Delete
    {
        return new Method\Likes_Delete($this->client, $this->defaultQuery);
    }
    public function isLiked() : Method\Likes_IsLiked
    {
        return new Method\Likes_IsLiked($this->client, $this->defaultQuery);
    }
}