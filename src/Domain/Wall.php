<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Wall
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Wall_Get
    {
        return new Method\Wall_Get($this->client, $this->defaultQuery);
    }
    public function search() : Method\Wall_Search
    {
        return new Method\Wall_Search($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Wall_GetById
    {
        return new Method\Wall_GetById($this->client, $this->defaultQuery);
    }
    public function post() : Method\Wall_Post
    {
        return new Method\Wall_Post($this->client, $this->defaultQuery);
    }
    public function postAdsStealth() : Method\Wall_PostAdsStealth
    {
        return new Method\Wall_PostAdsStealth($this->client, $this->defaultQuery);
    }
    public function repost() : Method\Wall_Repost
    {
        return new Method\Wall_Repost($this->client, $this->defaultQuery);
    }
    public function getReposts() : Method\Wall_GetReposts
    {
        return new Method\Wall_GetReposts($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Wall_Edit
    {
        return new Method\Wall_Edit($this->client, $this->defaultQuery);
    }
    public function editAdsStealth() : Method\Wall_EditAdsStealth
    {
        return new Method\Wall_EditAdsStealth($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Wall_Delete
    {
        return new Method\Wall_Delete($this->client, $this->defaultQuery);
    }
    public function restore() : Method\Wall_Restore
    {
        return new Method\Wall_Restore($this->client, $this->defaultQuery);
    }
    public function pin() : Method\Wall_Pin
    {
        return new Method\Wall_Pin($this->client, $this->defaultQuery);
    }
    public function unpin() : Method\Wall_Unpin
    {
        return new Method\Wall_Unpin($this->client, $this->defaultQuery);
    }
    public function getComments() : Method\Wall_GetComments
    {
        return new Method\Wall_GetComments($this->client, $this->defaultQuery);
    }
    public function createComment() : Method\Wall_CreateComment
    {
        return new Method\Wall_CreateComment($this->client, $this->defaultQuery);
    }
    public function editComment() : Method\Wall_EditComment
    {
        return new Method\Wall_EditComment($this->client, $this->defaultQuery);
    }
    public function deleteComment() : Method\Wall_DeleteComment
    {
        return new Method\Wall_DeleteComment($this->client, $this->defaultQuery);
    }
    public function restoreComment() : Method\Wall_RestoreComment
    {
        return new Method\Wall_RestoreComment($this->client, $this->defaultQuery);
    }
    public function reportPost() : Method\Wall_ReportPost
    {
        return new Method\Wall_ReportPost($this->client, $this->defaultQuery);
    }
    public function reportComment() : Method\Wall_ReportComment
    {
        return new Method\Wall_ReportComment($this->client, $this->defaultQuery);
    }
}