<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Photos
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function createAlbum() : Method\Photos_CreateAlbum
    {
        return new Method\Photos_CreateAlbum($this->client, $this->defaultQuery);
    }
    public function editAlbum() : Method\Photos_EditAlbum
    {
        return new Method\Photos_EditAlbum($this->client, $this->defaultQuery);
    }
    public function getAlbums() : Method\Photos_GetAlbums
    {
        return new Method\Photos_GetAlbums($this->client, $this->defaultQuery);
    }
    public function get() : Method\Photos_Get
    {
        return new Method\Photos_Get($this->client, $this->defaultQuery);
    }
    public function getAlbumsCount() : Method\Photos_GetAlbumsCount
    {
        return new Method\Photos_GetAlbumsCount($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Photos_GetById
    {
        return new Method\Photos_GetById($this->client, $this->defaultQuery);
    }
    public function getUploadServer() : Method\Photos_GetUploadServer
    {
        return new Method\Photos_GetUploadServer($this->client, $this->defaultQuery);
    }
    public function getOwnerCoverPhotoUploadServer() : Method\Photos_GetOwnerCoverPhotoUploadServer
    {
        return new Method\Photos_GetOwnerCoverPhotoUploadServer($this->client, $this->defaultQuery);
    }
    public function getOwnerPhotoUploadServer() : Method\Photos_GetOwnerPhotoUploadServer
    {
        return new Method\Photos_GetOwnerPhotoUploadServer($this->client, $this->defaultQuery);
    }
    public function getChatUploadServer() : Method\Photos_GetChatUploadServer
    {
        return new Method\Photos_GetChatUploadServer($this->client, $this->defaultQuery);
    }
    public function getMarketUploadServer() : Method\Photos_GetMarketUploadServer
    {
        return new Method\Photos_GetMarketUploadServer($this->client, $this->defaultQuery);
    }
    public function getMarketAlbumUploadServer() : Method\Photos_GetMarketAlbumUploadServer
    {
        return new Method\Photos_GetMarketAlbumUploadServer($this->client, $this->defaultQuery);
    }
    public function saveMarketPhoto() : Method\Photos_SaveMarketPhoto
    {
        return new Method\Photos_SaveMarketPhoto($this->client, $this->defaultQuery);
    }
    public function saveOwnerCoverPhoto() : Method\Photos_SaveOwnerCoverPhoto
    {
        return new Method\Photos_SaveOwnerCoverPhoto($this->client, $this->defaultQuery);
    }
    public function saveMarketAlbumPhoto() : Method\Photos_SaveMarketAlbumPhoto
    {
        return new Method\Photos_SaveMarketAlbumPhoto($this->client, $this->defaultQuery);
    }
    public function saveOwnerPhoto() : Method\Photos_SaveOwnerPhoto
    {
        return new Method\Photos_SaveOwnerPhoto($this->client, $this->defaultQuery);
    }
    public function saveWallPhoto() : Method\Photos_SaveWallPhoto
    {
        return new Method\Photos_SaveWallPhoto($this->client, $this->defaultQuery);
    }
    public function getWallUploadServer() : Method\Photos_GetWallUploadServer
    {
        return new Method\Photos_GetWallUploadServer($this->client, $this->defaultQuery);
    }
    public function getMessagesUploadServer() : Method\Photos_GetMessagesUploadServer
    {
        return new Method\Photos_GetMessagesUploadServer($this->client, $this->defaultQuery);
    }
    public function saveMessagesPhoto() : Method\Photos_SaveMessagesPhoto
    {
        return new Method\Photos_SaveMessagesPhoto($this->client, $this->defaultQuery);
    }
    public function report() : Method\Photos_Report
    {
        return new Method\Photos_Report($this->client, $this->defaultQuery);
    }
    public function reportComment() : Method\Photos_ReportComment
    {
        return new Method\Photos_ReportComment($this->client, $this->defaultQuery);
    }
    public function search() : Method\Photos_Search
    {
        return new Method\Photos_Search($this->client, $this->defaultQuery);
    }
    public function save() : Method\Photos_Save
    {
        return new Method\Photos_Save($this->client, $this->defaultQuery);
    }
    public function copy() : Method\Photos_Copy
    {
        return new Method\Photos_Copy($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Photos_Edit
    {
        return new Method\Photos_Edit($this->client, $this->defaultQuery);
    }
    public function move() : Method\Photos_Move
    {
        return new Method\Photos_Move($this->client, $this->defaultQuery);
    }
    public function makeCover() : Method\Photos_MakeCover
    {
        return new Method\Photos_MakeCover($this->client, $this->defaultQuery);
    }
    public function reorderAlbums() : Method\Photos_ReorderAlbums
    {
        return new Method\Photos_ReorderAlbums($this->client, $this->defaultQuery);
    }
    public function reorderPhotos() : Method\Photos_ReorderPhotos
    {
        return new Method\Photos_ReorderPhotos($this->client, $this->defaultQuery);
    }
    public function getAll() : Method\Photos_GetAll
    {
        return new Method\Photos_GetAll($this->client, $this->defaultQuery);
    }
    public function getUserPhotos() : Method\Photos_GetUserPhotos
    {
        return new Method\Photos_GetUserPhotos($this->client, $this->defaultQuery);
    }
    public function deleteAlbum() : Method\Photos_DeleteAlbum
    {
        return new Method\Photos_DeleteAlbum($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Photos_Delete
    {
        return new Method\Photos_Delete($this->client, $this->defaultQuery);
    }
    public function restore() : Method\Photos_Restore
    {
        return new Method\Photos_Restore($this->client, $this->defaultQuery);
    }
    public function confirmTag() : Method\Photos_ConfirmTag
    {
        return new Method\Photos_ConfirmTag($this->client, $this->defaultQuery);
    }
    public function getComments() : Method\Photos_GetComments
    {
        return new Method\Photos_GetComments($this->client, $this->defaultQuery);
    }
    public function getAllComments() : Method\Photos_GetAllComments
    {
        return new Method\Photos_GetAllComments($this->client, $this->defaultQuery);
    }
    public function createComment() : Method\Photos_CreateComment
    {
        return new Method\Photos_CreateComment($this->client, $this->defaultQuery);
    }
    public function deleteComment() : Method\Photos_DeleteComment
    {
        return new Method\Photos_DeleteComment($this->client, $this->defaultQuery);
    }
    public function restoreComment() : Method\Photos_RestoreComment
    {
        return new Method\Photos_RestoreComment($this->client, $this->defaultQuery);
    }
    public function editComment() : Method\Photos_EditComment
    {
        return new Method\Photos_EditComment($this->client, $this->defaultQuery);
    }
    public function getTags() : Method\Photos_GetTags
    {
        return new Method\Photos_GetTags($this->client, $this->defaultQuery);
    }
    public function putTag() : Method\Photos_PutTag
    {
        return new Method\Photos_PutTag($this->client, $this->defaultQuery);
    }
    public function removeTag() : Method\Photos_RemoveTag
    {
        return new Method\Photos_RemoveTag($this->client, $this->defaultQuery);
    }
    public function getNewTags() : Method\Photos_GetNewTags
    {
        return new Method\Photos_GetNewTags($this->client, $this->defaultQuery);
    }
}