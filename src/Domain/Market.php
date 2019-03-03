<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Market
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Market_Get
    {
        return new Method\Market_Get($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Market_GetById
    {
        return new Method\Market_GetById($this->client, $this->defaultQuery);
    }
    public function search() : Method\Market_Search
    {
        return new Method\Market_Search($this->client, $this->defaultQuery);
    }
    public function getAlbums() : Method\Market_GetAlbums
    {
        return new Method\Market_GetAlbums($this->client, $this->defaultQuery);
    }
    public function getAlbumById() : Method\Market_GetAlbumById
    {
        return new Method\Market_GetAlbumById($this->client, $this->defaultQuery);
    }
    public function createComment() : Method\Market_CreateComment
    {
        return new Method\Market_CreateComment($this->client, $this->defaultQuery);
    }
    public function getComments() : Method\Market_GetComments
    {
        return new Method\Market_GetComments($this->client, $this->defaultQuery);
    }
    public function deleteComment() : Method\Market_DeleteComment
    {
        return new Method\Market_DeleteComment($this->client, $this->defaultQuery);
    }
    public function restoreComment() : Method\Market_RestoreComment
    {
        return new Method\Market_RestoreComment($this->client, $this->defaultQuery);
    }
    public function editComment() : Method\Market_EditComment
    {
        return new Method\Market_EditComment($this->client, $this->defaultQuery);
    }
    public function reportComment() : Method\Market_ReportComment
    {
        return new Method\Market_ReportComment($this->client, $this->defaultQuery);
    }
    public function getCategories() : Method\Market_GetCategories
    {
        return new Method\Market_GetCategories($this->client, $this->defaultQuery);
    }
    public function report() : Method\Market_Report
    {
        return new Method\Market_Report($this->client, $this->defaultQuery);
    }
    public function add() : Method\Market_Add
    {
        return new Method\Market_Add($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Market_Edit
    {
        return new Method\Market_Edit($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Market_Delete
    {
        return new Method\Market_Delete($this->client, $this->defaultQuery);
    }
    public function restore() : Method\Market_Restore
    {
        return new Method\Market_Restore($this->client, $this->defaultQuery);
    }
    public function reorderItems() : Method\Market_ReorderItems
    {
        return new Method\Market_ReorderItems($this->client, $this->defaultQuery);
    }
    public function reorderAlbums() : Method\Market_ReorderAlbums
    {
        return new Method\Market_ReorderAlbums($this->client, $this->defaultQuery);
    }
    public function addAlbum() : Method\Market_AddAlbum
    {
        return new Method\Market_AddAlbum($this->client, $this->defaultQuery);
    }
    public function editAlbum() : Method\Market_EditAlbum
    {
        return new Method\Market_EditAlbum($this->client, $this->defaultQuery);
    }
    public function deleteAlbum() : Method\Market_DeleteAlbum
    {
        return new Method\Market_DeleteAlbum($this->client, $this->defaultQuery);
    }
    public function removeFromAlbum() : Method\Market_RemoveFromAlbum
    {
        return new Method\Market_RemoveFromAlbum($this->client, $this->defaultQuery);
    }
    public function addToAlbum() : Method\Market_AddToAlbum
    {
        return new Method\Market_AddToAlbum($this->client, $this->defaultQuery);
    }
}