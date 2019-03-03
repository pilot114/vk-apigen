<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Fave
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getUsers() : Method\Fave_GetUsers
    {
        return new Method\Fave_GetUsers($this->client, $this->defaultQuery);
    }
    public function getPhotos() : Method\Fave_GetPhotos
    {
        return new Method\Fave_GetPhotos($this->client, $this->defaultQuery);
    }
    public function getPosts() : Method\Fave_GetPosts
    {
        return new Method\Fave_GetPosts($this->client, $this->defaultQuery);
    }
    public function getVideos() : Method\Fave_GetVideos
    {
        return new Method\Fave_GetVideos($this->client, $this->defaultQuery);
    }
    public function getLinks() : Method\Fave_GetLinks
    {
        return new Method\Fave_GetLinks($this->client, $this->defaultQuery);
    }
    public function getMarketItems() : Method\Fave_GetMarketItems
    {
        return new Method\Fave_GetMarketItems($this->client, $this->defaultQuery);
    }
    public function addUser() : Method\Fave_AddUser
    {
        return new Method\Fave_AddUser($this->client, $this->defaultQuery);
    }
    public function removeUser() : Method\Fave_RemoveUser
    {
        return new Method\Fave_RemoveUser($this->client, $this->defaultQuery);
    }
    public function addGroup() : Method\Fave_AddGroup
    {
        return new Method\Fave_AddGroup($this->client, $this->defaultQuery);
    }
    public function removeGroup() : Method\Fave_RemoveGroup
    {
        return new Method\Fave_RemoveGroup($this->client, $this->defaultQuery);
    }
    public function addLink() : Method\Fave_AddLink
    {
        return new Method\Fave_AddLink($this->client, $this->defaultQuery);
    }
    public function removeLink() : Method\Fave_RemoveLink
    {
        return new Method\Fave_RemoveLink($this->client, $this->defaultQuery);
    }
}