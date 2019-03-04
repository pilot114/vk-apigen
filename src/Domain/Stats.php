<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Stats
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
    public function get() : Method\Stats\Get
    {
        return new Method\Stats\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function trackVisitor() : Method\Stats\TrackVisitor
    {
        return new Method\Stats\TrackVisitor($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPostReach() : Method\Stats\GetPostReach
    {
        return new Method\Stats\GetPostReach($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}