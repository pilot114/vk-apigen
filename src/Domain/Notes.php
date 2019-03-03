<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Notes
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Notes_Get
    {
        return new Method\Notes_Get($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Notes_GetById
    {
        return new Method\Notes_GetById($this->client, $this->defaultQuery);
    }
    public function add() : Method\Notes_Add
    {
        return new Method\Notes_Add($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Notes_Edit
    {
        return new Method\Notes_Edit($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Notes_Delete
    {
        return new Method\Notes_Delete($this->client, $this->defaultQuery);
    }
    public function getComments() : Method\Notes_GetComments
    {
        return new Method\Notes_GetComments($this->client, $this->defaultQuery);
    }
    public function createComment() : Method\Notes_CreateComment
    {
        return new Method\Notes_CreateComment($this->client, $this->defaultQuery);
    }
    public function editComment() : Method\Notes_EditComment
    {
        return new Method\Notes_EditComment($this->client, $this->defaultQuery);
    }
    public function deleteComment() : Method\Notes_DeleteComment
    {
        return new Method\Notes_DeleteComment($this->client, $this->defaultQuery);
    }
    public function restoreComment() : Method\Notes_RestoreComment
    {
        return new Method\Notes_RestoreComment($this->client, $this->defaultQuery);
    }
}