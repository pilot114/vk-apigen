<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Wall
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
    public function checkCopyrightLink() : Method\Wall\CheckCopyrightLink
    {
        return new Method\Wall\CheckCopyrightLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function closeComments() : Method\Wall\CloseComments
    {
        return new Method\Wall\CloseComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createComment() : Method\Wall\CreateComment
    {
        return new Method\Wall\CreateComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Wall\Delete
    {
        return new Method\Wall\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteComment() : Method\Wall\DeleteComment
    {
        return new Method\Wall\DeleteComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Wall\Edit
    {
        return new Method\Wall\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editAdsStealth() : Method\Wall\EditAdsStealth
    {
        return new Method\Wall\EditAdsStealth($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editComment() : Method\Wall\EditComment
    {
        return new Method\Wall\EditComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Wall\Get
    {
        return new Method\Wall\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Wall\GetById
    {
        return new Method\Wall\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComment() : Method\Wall\GetComment
    {
        return new Method\Wall\GetComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComments() : Method\Wall\GetComments
    {
        return new Method\Wall\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getReposts() : Method\Wall\GetReposts
    {
        return new Method\Wall\GetReposts($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function openComments() : Method\Wall\OpenComments
    {
        return new Method\Wall\OpenComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function pin() : Method\Wall\Pin
    {
        return new Method\Wall\Pin($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function post() : Method\Wall\Post
    {
        return new Method\Wall\Post($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function postAdsStealth() : Method\Wall\PostAdsStealth
    {
        return new Method\Wall\PostAdsStealth($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reportComment() : Method\Wall\ReportComment
    {
        return new Method\Wall\ReportComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reportPost() : Method\Wall\ReportPost
    {
        return new Method\Wall\ReportPost($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function repost() : Method\Wall\Repost
    {
        return new Method\Wall\Repost($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restore() : Method\Wall\Restore
    {
        return new Method\Wall\Restore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restoreComment() : Method\Wall\RestoreComment
    {
        return new Method\Wall\RestoreComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Wall\Search
    {
        return new Method\Wall\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unpin() : Method\Wall\Unpin
    {
        return new Method\Wall\Unpin($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}