<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Photos
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
    public function confirmTag() : Method\Photos\ConfirmTag
    {
        return new Method\Photos\ConfirmTag($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function copy() : Method\Photos\Copy
    {
        return new Method\Photos\Copy($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createAlbum() : Method\Photos\CreateAlbum
    {
        return new Method\Photos\CreateAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createComment() : Method\Photos\CreateComment
    {
        return new Method\Photos\CreateComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Photos\Delete
    {
        return new Method\Photos\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteAlbum() : Method\Photos\DeleteAlbum
    {
        return new Method\Photos\DeleteAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteComment() : Method\Photos\DeleteComment
    {
        return new Method\Photos\DeleteComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Photos\Edit
    {
        return new Method\Photos\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editAlbum() : Method\Photos\EditAlbum
    {
        return new Method\Photos\EditAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editComment() : Method\Photos\EditComment
    {
        return new Method\Photos\EditComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Photos\Get
    {
        return new Method\Photos\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAlbums() : Method\Photos\GetAlbums
    {
        return new Method\Photos\GetAlbums($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAlbumsCount() : Method\Photos\GetAlbumsCount
    {
        return new Method\Photos\GetAlbumsCount($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAll() : Method\Photos\GetAll
    {
        return new Method\Photos\GetAll($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAllComments() : Method\Photos\GetAllComments
    {
        return new Method\Photos\GetAllComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Photos\GetById
    {
        return new Method\Photos\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getChatUploadServer() : Method\Photos\GetChatUploadServer
    {
        return new Method\Photos\GetChatUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComments() : Method\Photos\GetComments
    {
        return new Method\Photos\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMarketAlbumUploadServer() : Method\Photos\GetMarketAlbumUploadServer
    {
        return new Method\Photos\GetMarketAlbumUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMarketUploadServer() : Method\Photos\GetMarketUploadServer
    {
        return new Method\Photos\GetMarketUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMessagesUploadServer() : Method\Photos\GetMessagesUploadServer
    {
        return new Method\Photos\GetMessagesUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getNewTags() : Method\Photos\GetNewTags
    {
        return new Method\Photos\GetNewTags($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getOwnerCoverPhotoUploadServer() : Method\Photos\GetOwnerCoverPhotoUploadServer
    {
        return new Method\Photos\GetOwnerCoverPhotoUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getOwnerPhotoUploadServer() : Method\Photos\GetOwnerPhotoUploadServer
    {
        return new Method\Photos\GetOwnerPhotoUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTags() : Method\Photos\GetTags
    {
        return new Method\Photos\GetTags($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUploadServer() : Method\Photos\GetUploadServer
    {
        return new Method\Photos\GetUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUserPhotos() : Method\Photos\GetUserPhotos
    {
        return new Method\Photos\GetUserPhotos($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getWallUploadServer() : Method\Photos\GetWallUploadServer
    {
        return new Method\Photos\GetWallUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function makeCover() : Method\Photos\MakeCover
    {
        return new Method\Photos\MakeCover($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function move() : Method\Photos\Move
    {
        return new Method\Photos\Move($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function putTag() : Method\Photos\PutTag
    {
        return new Method\Photos\PutTag($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeTag() : Method\Photos\RemoveTag
    {
        return new Method\Photos\RemoveTag($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderAlbums() : Method\Photos\ReorderAlbums
    {
        return new Method\Photos\ReorderAlbums($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderPhotos() : Method\Photos\ReorderPhotos
    {
        return new Method\Photos\ReorderPhotos($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function report() : Method\Photos\Report
    {
        return new Method\Photos\Report($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reportComment() : Method\Photos\ReportComment
    {
        return new Method\Photos\ReportComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restore() : Method\Photos\Restore
    {
        return new Method\Photos\Restore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restoreComment() : Method\Photos\RestoreComment
    {
        return new Method\Photos\RestoreComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function save() : Method\Photos\Save
    {
        return new Method\Photos\Save($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveMarketAlbumPhoto() : Method\Photos\SaveMarketAlbumPhoto
    {
        return new Method\Photos\SaveMarketAlbumPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveMarketPhoto() : Method\Photos\SaveMarketPhoto
    {
        return new Method\Photos\SaveMarketPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveMessagesPhoto() : Method\Photos\SaveMessagesPhoto
    {
        return new Method\Photos\SaveMessagesPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveOwnerCoverPhoto() : Method\Photos\SaveOwnerCoverPhoto
    {
        return new Method\Photos\SaveOwnerCoverPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveOwnerPhoto() : Method\Photos\SaveOwnerPhoto
    {
        return new Method\Photos\SaveOwnerPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveWallPhoto() : Method\Photos\SaveWallPhoto
    {
        return new Method\Photos\SaveWallPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Photos\Search
    {
        return new Method\Photos\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}