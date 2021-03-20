<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Friends
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
    public function add() : Method\Friends\Add
    {
        return new Method\Friends\Add($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addList() : Method\Friends\AddList
    {
        return new Method\Friends\AddList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function areFriends() : Method\Friends\AreFriends
    {
        return new Method\Friends\AreFriends($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Friends\Delete
    {
        return new Method\Friends\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteAllRequests() : Method\Friends\DeleteAllRequests
    {
        return new Method\Friends\DeleteAllRequests($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteList() : Method\Friends\DeleteList
    {
        return new Method\Friends\DeleteList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Friends\Edit
    {
        return new Method\Friends\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editList() : Method\Friends\EditList
    {
        return new Method\Friends\EditList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Friends\Get
    {
        return new Method\Friends\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAppUsers() : Method\Friends\GetAppUsers
    {
        return new Method\Friends\GetAppUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getByPhones() : Method\Friends\GetByPhones
    {
        return new Method\Friends\GetByPhones($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLists() : Method\Friends\GetLists
    {
        return new Method\Friends\GetLists($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMutual() : Method\Friends\GetMutual
    {
        return new Method\Friends\GetMutual($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getOnline() : Method\Friends\GetOnline
    {
        return new Method\Friends\GetOnline($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getRecent() : Method\Friends\GetRecent
    {
        return new Method\Friends\GetRecent($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getRequests() : Method\Friends\GetRequests
    {
        return new Method\Friends\GetRequests($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSuggestions() : Method\Friends\GetSuggestions
    {
        return new Method\Friends\GetSuggestions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Friends\Search
    {
        return new Method\Friends\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}