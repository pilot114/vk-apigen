<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Utils
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
    public function checkLink() : Method\Utils\CheckLink
    {
        return new Method\Utils\CheckLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteFromLastShortened() : Method\Utils\DeleteFromLastShortened
    {
        return new Method\Utils\DeleteFromLastShortened($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLastShortenedLinks() : Method\Utils\GetLastShortenedLinks
    {
        return new Method\Utils\GetLastShortenedLinks($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLinkStats() : Method\Utils\GetLinkStats
    {
        return new Method\Utils\GetLinkStats($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getServerTime() : Method\Utils\GetServerTime
    {
        return new Method\Utils\GetServerTime($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getShortLink() : Method\Utils\GetShortLink
    {
        return new Method\Utils\GetShortLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function resolveScreenName() : Method\Utils\ResolveScreenName
    {
        return new Method\Utils\ResolveScreenName($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}