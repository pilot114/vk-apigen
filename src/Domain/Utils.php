<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Utils
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function checkLink() : Method\Utils_CheckLink
    {
        return new Method\Utils_CheckLink($this->client, $this->defaultQuery);
    }
    public function deleteFromLastShortened() : Method\Utils_DeleteFromLastShortened
    {
        return new Method\Utils_DeleteFromLastShortened($this->client, $this->defaultQuery);
    }
    public function getLastShortenedLinks() : Method\Utils_GetLastShortenedLinks
    {
        return new Method\Utils_GetLastShortenedLinks($this->client, $this->defaultQuery);
    }
    public function getLinkStats() : Method\Utils_GetLinkStats
    {
        return new Method\Utils_GetLinkStats($this->client, $this->defaultQuery);
    }
    public function getShortLink() : Method\Utils_GetShortLink
    {
        return new Method\Utils_GetShortLink($this->client, $this->defaultQuery);
    }
    public function resolveScreenName() : Method\Utils_ResolveScreenName
    {
        return new Method\Utils_ResolveScreenName($this->client, $this->defaultQuery);
    }
    public function getServerTime() : Method\Utils_GetServerTime
    {
        return new Method\Utils_GetServerTime($this->client, $this->defaultQuery);
    }
}