<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Stories
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function banOwner() : Method\Stories_BanOwner
    {
        return new Method\Stories_BanOwner($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Stories_Delete
    {
        return new Method\Stories_Delete($this->client, $this->defaultQuery);
    }
    public function get() : Method\Stories_Get
    {
        return new Method\Stories_Get($this->client, $this->defaultQuery);
    }
    public function getBanned() : Method\Stories_GetBanned
    {
        return new Method\Stories_GetBanned($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Stories_GetById
    {
        return new Method\Stories_GetById($this->client, $this->defaultQuery);
    }
    public function getPhotoUploadServer() : Method\Stories_GetPhotoUploadServer
    {
        return new Method\Stories_GetPhotoUploadServer($this->client, $this->defaultQuery);
    }
    public function getReplies() : Method\Stories_GetReplies
    {
        return new Method\Stories_GetReplies($this->client, $this->defaultQuery);
    }
    public function getStats() : Method\Stories_GetStats
    {
        return new Method\Stories_GetStats($this->client, $this->defaultQuery);
    }
    public function getVideoUploadServer() : Method\Stories_GetVideoUploadServer
    {
        return new Method\Stories_GetVideoUploadServer($this->client, $this->defaultQuery);
    }
    public function getViewers() : Method\Stories_GetViewers
    {
        return new Method\Stories_GetViewers($this->client, $this->defaultQuery);
    }
    public function hideAllReplies() : Method\Stories_HideAllReplies
    {
        return new Method\Stories_HideAllReplies($this->client, $this->defaultQuery);
    }
    public function hideReply() : Method\Stories_HideReply
    {
        return new Method\Stories_HideReply($this->client, $this->defaultQuery);
    }
    public function unbanOwner() : Method\Stories_UnbanOwner
    {
        return new Method\Stories_UnbanOwner($this->client, $this->defaultQuery);
    }
}