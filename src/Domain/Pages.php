<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Pages
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
    public function clearCache() : Method\Pages\ClearCache
    {
        return new Method\Pages\ClearCache($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Pages\Get
    {
        return new Method\Pages\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getHistory() : Method\Pages\GetHistory
    {
        return new Method\Pages\GetHistory($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTitles() : Method\Pages\GetTitles
    {
        return new Method\Pages\GetTitles($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getVersion() : Method\Pages\GetVersion
    {
        return new Method\Pages\GetVersion($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function parseWiki() : Method\Pages\ParseWiki
    {
        return new Method\Pages\ParseWiki($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function save() : Method\Pages\Save
    {
        return new Method\Pages\Save($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveAccess() : Method\Pages\SaveAccess
    {
        return new Method\Pages\SaveAccess($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}