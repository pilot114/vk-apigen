<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Video
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Video_Get
    {
        return new Method\Video_Get($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Video_Edit
    {
        return new Method\Video_Edit($this->client, $this->defaultQuery);
    }
    public function add() : Method\Video_Add
    {
        return new Method\Video_Add($this->client, $this->defaultQuery);
    }
    public function save() : Method\Video_Save
    {
        return new Method\Video_Save($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Video_Delete
    {
        return new Method\Video_Delete($this->client, $this->defaultQuery);
    }
    public function restore() : Method\Video_Restore
    {
        return new Method\Video_Restore($this->client, $this->defaultQuery);
    }
    public function search() : Method\Video_Search
    {
        return new Method\Video_Search($this->client, $this->defaultQuery);
    }
    public function getUserVideos() : Method\Video_GetUserVideos
    {
        return new Method\Video_GetUserVideos($this->client, $this->defaultQuery);
    }
    public function getAlbums() : Method\Video_GetAlbums
    {
        return new Method\Video_GetAlbums($this->client, $this->defaultQuery);
    }
    public function getAlbumById() : Method\Video_GetAlbumById
    {
        return new Method\Video_GetAlbumById($this->client, $this->defaultQuery);
    }
    public function addAlbum() : Method\Video_AddAlbum
    {
        return new Method\Video_AddAlbum($this->client, $this->defaultQuery);
    }
    public function editAlbum() : Method\Video_EditAlbum
    {
        return new Method\Video_EditAlbum($this->client, $this->defaultQuery);
    }
    public function deleteAlbum() : Method\Video_DeleteAlbum
    {
        return new Method\Video_DeleteAlbum($this->client, $this->defaultQuery);
    }
    public function reorderAlbums() : Method\Video_ReorderAlbums
    {
        return new Method\Video_ReorderAlbums($this->client, $this->defaultQuery);
    }
    public function reorderVideos() : Method\Video_ReorderVideos
    {
        return new Method\Video_ReorderVideos($this->client, $this->defaultQuery);
    }
    public function addToAlbum() : Method\Video_AddToAlbum
    {
        return new Method\Video_AddToAlbum($this->client, $this->defaultQuery);
    }
    public function removeFromAlbum() : Method\Video_RemoveFromAlbum
    {
        return new Method\Video_RemoveFromAlbum($this->client, $this->defaultQuery);
    }
    public function getAlbumsByVideo() : Method\Video_GetAlbumsByVideo
    {
        return new Method\Video_GetAlbumsByVideo($this->client, $this->defaultQuery);
    }
    public function getComments() : Method\Video_GetComments
    {
        return new Method\Video_GetComments($this->client, $this->defaultQuery);
    }
    public function createComment() : Method\Video_CreateComment
    {
        return new Method\Video_CreateComment($this->client, $this->defaultQuery);
    }
    public function deleteComment() : Method\Video_DeleteComment
    {
        return new Method\Video_DeleteComment($this->client, $this->defaultQuery);
    }
    public function restoreComment() : Method\Video_RestoreComment
    {
        return new Method\Video_RestoreComment($this->client, $this->defaultQuery);
    }
    public function editComment() : Method\Video_EditComment
    {
        return new Method\Video_EditComment($this->client, $this->defaultQuery);
    }
    public function getTags() : Method\Video_GetTags
    {
        return new Method\Video_GetTags($this->client, $this->defaultQuery);
    }
    public function putTag() : Method\Video_PutTag
    {
        return new Method\Video_PutTag($this->client, $this->defaultQuery);
    }
    public function removeTag() : Method\Video_RemoveTag
    {
        return new Method\Video_RemoveTag($this->client, $this->defaultQuery);
    }
    public function getNewTags() : Method\Video_GetNewTags
    {
        return new Method\Video_GetNewTags($this->client, $this->defaultQuery);
    }
    public function report() : Method\Video_Report
    {
        return new Method\Video_Report($this->client, $this->defaultQuery);
    }
    public function reportComment() : Method\Video_ReportComment
    {
        return new Method\Video_ReportComment($this->client, $this->defaultQuery);
    }
    public function getCatalog() : Method\Video_GetCatalog
    {
        return new Method\Video_GetCatalog($this->client, $this->defaultQuery);
    }
    public function getCatalogSection() : Method\Video_GetCatalogSection
    {
        return new Method\Video_GetCatalogSection($this->client, $this->defaultQuery);
    }
    public function hideCatalogSection() : Method\Video_HideCatalogSection
    {
        return new Method\Video_HideCatalogSection($this->client, $this->defaultQuery);
    }
}