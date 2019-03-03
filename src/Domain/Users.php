<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Users
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Users_Get
    {
        return new Method\Users_Get($this->client, $this->defaultQuery);
    }
    public function search() : Method\Users_Search
    {
        return new Method\Users_Search($this->client, $this->defaultQuery);
    }
    public function isAppUser() : Method\Users_IsAppUser
    {
        return new Method\Users_IsAppUser($this->client, $this->defaultQuery);
    }
    public function getSubscriptions() : Method\Users_GetSubscriptions
    {
        return new Method\Users_GetSubscriptions($this->client, $this->defaultQuery);
    }
    public function getFollowers() : Method\Users_GetFollowers
    {
        return new Method\Users_GetFollowers($this->client, $this->defaultQuery);
    }
    public function report() : Method\Users_Report
    {
        return new Method\Users_Report($this->client, $this->defaultQuery);
    }
    public function getNearby() : Method\Users_GetNearby
    {
        return new Method\Users_GetNearby($this->client, $this->defaultQuery);
    }
}