<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Widgets
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
    public function getComments() : Method\Widgets\GetComments
    {
        return new Method\Widgets\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPages() : Method\Widgets\GetPages
    {
        return new Method\Widgets\GetPages($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}