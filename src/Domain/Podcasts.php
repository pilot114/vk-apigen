<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Podcasts
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
    public function searchPodcast() : Method\Podcasts\SearchPodcast
    {
        return new Method\Podcasts\SearchPodcast($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}