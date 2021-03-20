<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Adsweb
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
    public function getAdCategories() : Method\Adsweb\GetAdCategories
    {
        return new Method\Adsweb\GetAdCategories($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAdUnitCode() : Method\Adsweb\GetAdUnitCode
    {
        return new Method\Adsweb\GetAdUnitCode($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAdUnits() : Method\Adsweb\GetAdUnits
    {
        return new Method\Adsweb\GetAdUnits($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getFraudHistory() : Method\Adsweb\GetFraudHistory
    {
        return new Method\Adsweb\GetFraudHistory($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSites() : Method\Adsweb\GetSites
    {
        return new Method\Adsweb\GetSites($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getStatistics() : Method\Adsweb\GetStatistics
    {
        return new Method\Adsweb\GetStatistics($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}