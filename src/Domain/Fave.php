<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Fave
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
    public function getUsers() : Method\Fave\GetUsers
    {
        return new Method\Fave\GetUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPhotos() : Method\Fave\GetPhotos
    {
        return new Method\Fave\GetPhotos($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPosts() : Method\Fave\GetPosts
    {
        return new Method\Fave\GetPosts($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getVideos() : Method\Fave\GetVideos
    {
        return new Method\Fave\GetVideos($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLinks() : Method\Fave\GetLinks
    {
        return new Method\Fave\GetLinks($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMarketItems() : Method\Fave\GetMarketItems
    {
        return new Method\Fave\GetMarketItems($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addUser() : Method\Fave\AddUser
    {
        return new Method\Fave\AddUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeUser() : Method\Fave\RemoveUser
    {
        return new Method\Fave\RemoveUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addGroup() : Method\Fave\AddGroup
    {
        return new Method\Fave\AddGroup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeGroup() : Method\Fave\RemoveGroup
    {
        return new Method\Fave\RemoveGroup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addLink() : Method\Fave\AddLink
    {
        return new Method\Fave\AddLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeLink() : Method\Fave\RemoveLink
    {
        return new Method\Fave\RemoveLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}