<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Search
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getHints() : Method\Search_GetHints
    {
        return new Method\Search_GetHints($this->client, $this->defaultQuery);
    }
}