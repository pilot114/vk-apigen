<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Users
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
    public function get() : Method\Users\Get
    {
        return new Method\Users\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Users\Search
    {
        return new Method\Users\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function isAppUser() : Method\Users\IsAppUser
    {
        return new Method\Users\IsAppUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSubscriptions() : Method\Users\GetSubscriptions
    {
        return new Method\Users\GetSubscriptions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getFollowers() : Method\Users\GetFollowers
    {
        return new Method\Users\GetFollowers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function report() : Method\Users\Report
    {
        return new Method\Users\Report($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getNearby() : Method\Users\GetNearby
    {
        return new Method\Users\GetNearby($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}