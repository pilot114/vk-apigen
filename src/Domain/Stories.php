<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Stories
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
    public function banOwner() : Method\Stories\BanOwner
    {
        return new Method\Stories\BanOwner($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Stories\Delete
    {
        return new Method\Stories\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Stories\Get
    {
        return new Method\Stories\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getBanned() : Method\Stories\GetBanned
    {
        return new Method\Stories\GetBanned($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Stories\GetById
    {
        return new Method\Stories\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPhotoUploadServer() : Method\Stories\GetPhotoUploadServer
    {
        return new Method\Stories\GetPhotoUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getReplies() : Method\Stories\GetReplies
    {
        return new Method\Stories\GetReplies($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getStats() : Method\Stories\GetStats
    {
        return new Method\Stories\GetStats($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getVideoUploadServer() : Method\Stories\GetVideoUploadServer
    {
        return new Method\Stories\GetVideoUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getViewers() : Method\Stories\GetViewers
    {
        return new Method\Stories\GetViewers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function hideAllReplies() : Method\Stories\HideAllReplies
    {
        return new Method\Stories\HideAllReplies($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function hideReply() : Method\Stories\HideReply
    {
        return new Method\Stories\HideReply($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unbanOwner() : Method\Stories\UnbanOwner
    {
        return new Method\Stories\UnbanOwner($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}