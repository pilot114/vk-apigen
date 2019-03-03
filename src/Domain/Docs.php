<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Docs
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Docs_Get
    {
        return new Method\Docs_Get($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Docs_GetById
    {
        return new Method\Docs_GetById($this->client, $this->defaultQuery);
    }
    public function getUploadServer() : Method\Docs_GetUploadServer
    {
        return new Method\Docs_GetUploadServer($this->client, $this->defaultQuery);
    }
    public function getWallUploadServer() : Method\Docs_GetWallUploadServer
    {
        return new Method\Docs_GetWallUploadServer($this->client, $this->defaultQuery);
    }
    public function getMessagesUploadServer() : Method\Docs_GetMessagesUploadServer
    {
        return new Method\Docs_GetMessagesUploadServer($this->client, $this->defaultQuery);
    }
    public function save() : Method\Docs_Save
    {
        return new Method\Docs_Save($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Docs_Delete
    {
        return new Method\Docs_Delete($this->client, $this->defaultQuery);
    }
    public function add() : Method\Docs_Add
    {
        return new Method\Docs_Add($this->client, $this->defaultQuery);
    }
    public function getTypes() : Method\Docs_GetTypes
    {
        return new Method\Docs_GetTypes($this->client, $this->defaultQuery);
    }
    public function search() : Method\Docs_Search
    {
        return new Method\Docs_Search($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Docs_Edit
    {
        return new Method\Docs_Edit($this->client, $this->defaultQuery);
    }
}