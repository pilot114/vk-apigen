<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class DownloadedGames
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
    public function getPaidStatus() : Method\DownloadedGames\GetPaidStatus
    {
        return new Method\DownloadedGames\GetPaidStatus($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}