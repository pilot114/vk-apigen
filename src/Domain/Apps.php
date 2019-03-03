<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Apps
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getCatalog() : Method\Apps_GetCatalog
    {
        return new Method\Apps_GetCatalog($this->client, $this->defaultQuery);
    }
    public function get() : Method\Apps_Get
    {
        return new Method\Apps_Get($this->client, $this->defaultQuery);
    }
    public function sendRequest() : Method\Apps_SendRequest
    {
        return new Method\Apps_SendRequest($this->client, $this->defaultQuery);
    }
    public function deleteAppRequests() : Method\Apps_DeleteAppRequests
    {
        return new Method\Apps_DeleteAppRequests($this->client, $this->defaultQuery);
    }
    public function getFriendsList() : Method\Apps_GetFriendsList
    {
        return new Method\Apps_GetFriendsList($this->client, $this->defaultQuery);
    }
    public function getLeaderboard() : Method\Apps_GetLeaderboard
    {
        return new Method\Apps_GetLeaderboard($this->client, $this->defaultQuery);
    }
    public function getScore() : Method\Apps_GetScore
    {
        return new Method\Apps_GetScore($this->client, $this->defaultQuery);
    }
}