<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Stats
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Stats_Get
    {
        return new Method\Stats_Get($this->client, $this->defaultQuery);
    }
    public function trackVisitor() : Method\Stats_TrackVisitor
    {
        return new Method\Stats_TrackVisitor($this->client, $this->defaultQuery);
    }
    public function getPostReach() : Method\Stats_GetPostReach
    {
        return new Method\Stats_GetPostReach($this->client, $this->defaultQuery);
    }
}