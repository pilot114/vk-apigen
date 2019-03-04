<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Apps
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
    public function getCatalog() : Method\Apps\GetCatalog
    {
        return new Method\Apps\GetCatalog($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Apps\Get
    {
        return new Method\Apps\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function sendRequest() : Method\Apps\SendRequest
    {
        return new Method\Apps\SendRequest($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteAppRequests() : Method\Apps\DeleteAppRequests
    {
        return new Method\Apps\DeleteAppRequests($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getFriendsList() : Method\Apps\GetFriendsList
    {
        return new Method\Apps\GetFriendsList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLeaderboard() : Method\Apps\GetLeaderboard
    {
        return new Method\Apps\GetLeaderboard($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getScore() : Method\Apps\GetScore
    {
        return new Method\Apps\GetScore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}