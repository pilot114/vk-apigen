<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Friends
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Friends_Get
    {
        return new Method\Friends_Get($this->client, $this->defaultQuery);
    }
    public function getOnline() : Method\Friends_GetOnline
    {
        return new Method\Friends_GetOnline($this->client, $this->defaultQuery);
    }
    public function getMutual() : Method\Friends_GetMutual
    {
        return new Method\Friends_GetMutual($this->client, $this->defaultQuery);
    }
    public function getRecent() : Method\Friends_GetRecent
    {
        return new Method\Friends_GetRecent($this->client, $this->defaultQuery);
    }
    public function getRequests() : Method\Friends_GetRequests
    {
        return new Method\Friends_GetRequests($this->client, $this->defaultQuery);
    }
    public function add() : Method\Friends_Add
    {
        return new Method\Friends_Add($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Friends_Edit
    {
        return new Method\Friends_Edit($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Friends_Delete
    {
        return new Method\Friends_Delete($this->client, $this->defaultQuery);
    }
    public function getLists() : Method\Friends_GetLists
    {
        return new Method\Friends_GetLists($this->client, $this->defaultQuery);
    }
    public function addList() : Method\Friends_AddList
    {
        return new Method\Friends_AddList($this->client, $this->defaultQuery);
    }
    public function editList() : Method\Friends_EditList
    {
        return new Method\Friends_EditList($this->client, $this->defaultQuery);
    }
    public function deleteList() : Method\Friends_DeleteList
    {
        return new Method\Friends_DeleteList($this->client, $this->defaultQuery);
    }
    public function getAppUsers() : Method\Friends_GetAppUsers
    {
        return new Method\Friends_GetAppUsers($this->client, $this->defaultQuery);
    }
    public function getByPhones() : Method\Friends_GetByPhones
    {
        return new Method\Friends_GetByPhones($this->client, $this->defaultQuery);
    }
    public function deleteAllRequests() : Method\Friends_DeleteAllRequests
    {
        return new Method\Friends_DeleteAllRequests($this->client, $this->defaultQuery);
    }
    public function getSuggestions() : Method\Friends_GetSuggestions
    {
        return new Method\Friends_GetSuggestions($this->client, $this->defaultQuery);
    }
    public function areFriends() : Method\Friends_AreFriends
    {
        return new Method\Friends_AreFriends($this->client, $this->defaultQuery);
    }
    public function getAvailableForCall() : Method\Friends_GetAvailableForCall
    {
        return new Method\Friends_GetAvailableForCall($this->client, $this->defaultQuery);
    }
    public function search() : Method\Friends_Search
    {
        return new Method\Friends_Search($this->client, $this->defaultQuery);
    }
}