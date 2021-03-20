<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Video
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
    public function add() : Method\Video\Add
    {
        return new Method\Video\Add($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addAlbum() : Method\Video\AddAlbum
    {
        return new Method\Video\AddAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addToAlbum() : Method\Video\AddToAlbum
    {
        return new Method\Video\AddToAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createComment() : Method\Video\CreateComment
    {
        return new Method\Video\CreateComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Video\Delete
    {
        return new Method\Video\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteAlbum() : Method\Video\DeleteAlbum
    {
        return new Method\Video\DeleteAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteComment() : Method\Video\DeleteComment
    {
        return new Method\Video\DeleteComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Video\Edit
    {
        return new Method\Video\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editAlbum() : Method\Video\EditAlbum
    {
        return new Method\Video\EditAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editComment() : Method\Video\EditComment
    {
        return new Method\Video\EditComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Video\Get
    {
        return new Method\Video\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAlbumById() : Method\Video\GetAlbumById
    {
        return new Method\Video\GetAlbumById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAlbums() : Method\Video\GetAlbums
    {
        return new Method\Video\GetAlbums($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAlbumsByVideo() : Method\Video\GetAlbumsByVideo
    {
        return new Method\Video\GetAlbumsByVideo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComments() : Method\Video\GetComments
    {
        return new Method\Video\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeFromAlbum() : Method\Video\RemoveFromAlbum
    {
        return new Method\Video\RemoveFromAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderAlbums() : Method\Video\ReorderAlbums
    {
        return new Method\Video\ReorderAlbums($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderVideos() : Method\Video\ReorderVideos
    {
        return new Method\Video\ReorderVideos($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function report() : Method\Video\Report
    {
        return new Method\Video\Report($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reportComment() : Method\Video\ReportComment
    {
        return new Method\Video\ReportComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restore() : Method\Video\Restore
    {
        return new Method\Video\Restore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restoreComment() : Method\Video\RestoreComment
    {
        return new Method\Video\RestoreComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function save() : Method\Video\Save
    {
        return new Method\Video\Save($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Video\Search
    {
        return new Method\Video\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}