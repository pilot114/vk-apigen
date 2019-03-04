<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Leads
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
    public function complete() : Method\Leads\Complete
    {
        return new Method\Leads\Complete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function start() : Method\Leads\Start
    {
        return new Method\Leads\Start($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getStats() : Method\Leads\GetStats
    {
        return new Method\Leads\GetStats($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUsers() : Method\Leads\GetUsers
    {
        return new Method\Leads\GetUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function checkUser() : Method\Leads\CheckUser
    {
        return new Method\Leads\CheckUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function metricHit() : Method\Leads\MetricHit
    {
        return new Method\Leads\MetricHit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}