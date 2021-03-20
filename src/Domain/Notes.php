<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Notes
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
    public function add() : Method\Notes\Add
    {
        return new Method\Notes\Add($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createComment() : Method\Notes\CreateComment
    {
        return new Method\Notes\CreateComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Notes\Delete
    {
        return new Method\Notes\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteComment() : Method\Notes\DeleteComment
    {
        return new Method\Notes\DeleteComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Notes\Edit
    {
        return new Method\Notes\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editComment() : Method\Notes\EditComment
    {
        return new Method\Notes\EditComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Notes\Get
    {
        return new Method\Notes\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Notes\GetById
    {
        return new Method\Notes\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComments() : Method\Notes\GetComments
    {
        return new Method\Notes\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restoreComment() : Method\Notes\RestoreComment
    {
        return new Method\Notes\RestoreComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}