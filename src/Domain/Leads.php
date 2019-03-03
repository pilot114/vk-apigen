<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Leads
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function complete() : Method\Leads_Complete
    {
        return new Method\Leads_Complete($this->client, $this->defaultQuery);
    }
    public function start() : Method\Leads_Start
    {
        return new Method\Leads_Start($this->client, $this->defaultQuery);
    }
    public function getStats() : Method\Leads_GetStats
    {
        return new Method\Leads_GetStats($this->client, $this->defaultQuery);
    }
    public function getUsers() : Method\Leads_GetUsers
    {
        return new Method\Leads_GetUsers($this->client, $this->defaultQuery);
    }
    public function checkUser() : Method\Leads_CheckUser
    {
        return new Method\Leads_CheckUser($this->client, $this->defaultQuery);
    }
    public function metricHit() : Method\Leads_MetricHit
    {
        return new Method\Leads_MetricHit($this->client, $this->defaultQuery);
    }
}