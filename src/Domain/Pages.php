<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Pages
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Pages_Get
    {
        return new Method\Pages_Get($this->client, $this->defaultQuery);
    }
    public function save() : Method\Pages_Save
    {
        return new Method\Pages_Save($this->client, $this->defaultQuery);
    }
    public function saveAccess() : Method\Pages_SaveAccess
    {
        return new Method\Pages_SaveAccess($this->client, $this->defaultQuery);
    }
    public function getHistory() : Method\Pages_GetHistory
    {
        return new Method\Pages_GetHistory($this->client, $this->defaultQuery);
    }
    public function getTitles() : Method\Pages_GetTitles
    {
        return new Method\Pages_GetTitles($this->client, $this->defaultQuery);
    }
    public function getVersion() : Method\Pages_GetVersion
    {
        return new Method\Pages_GetVersion($this->client, $this->defaultQuery);
    }
    public function parseWiki() : Method\Pages_ParseWiki
    {
        return new Method\Pages_ParseWiki($this->client, $this->defaultQuery);
    }
    public function clearCache() : Method\Pages_ClearCache
    {
        return new Method\Pages_ClearCache($this->client, $this->defaultQuery);
    }
}