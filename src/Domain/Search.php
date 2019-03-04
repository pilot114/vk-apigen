<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Search
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
    public function getHints() : Method\Search\GetHints
    {
        return new Method\Search\GetHints($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}