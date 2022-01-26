<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Market
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
    public function add() : Method\Market\Add
    {
        return new Method\Market\Add($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addAlbum() : Method\Market\AddAlbum
    {
        return new Method\Market\AddAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addToAlbum() : Method\Market\AddToAlbum
    {
        return new Method\Market\AddToAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createComment() : Method\Market\CreateComment
    {
        return new Method\Market\CreateComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Market\Delete
    {
        return new Method\Market\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteAlbum() : Method\Market\DeleteAlbum
    {
        return new Method\Market\DeleteAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteComment() : Method\Market\DeleteComment
    {
        return new Method\Market\DeleteComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Market\Edit
    {
        return new Method\Market\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editAlbum() : Method\Market\EditAlbum
    {
        return new Method\Market\EditAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editComment() : Method\Market\EditComment
    {
        return new Method\Market\EditComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editOrder() : Method\Market\EditOrder
    {
        return new Method\Market\EditOrder($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Market\Get
    {
        return new Method\Market\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAlbumById() : Method\Market\GetAlbumById
    {
        return new Method\Market\GetAlbumById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAlbums() : Method\Market\GetAlbums
    {
        return new Method\Market\GetAlbums($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Market\GetById
    {
        return new Method\Market\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCategories() : Method\Market\GetCategories
    {
        return new Method\Market\GetCategories($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComments() : Method\Market\GetComments
    {
        return new Method\Market\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getGroupOrders() : Method\Market\GetGroupOrders
    {
        return new Method\Market\GetGroupOrders($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getOrderById() : Method\Market\GetOrderById
    {
        return new Method\Market\GetOrderById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getOrderItems() : Method\Market\GetOrderItems
    {
        return new Method\Market\GetOrderItems($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getOrders() : Method\Market\GetOrders
    {
        return new Method\Market\GetOrders($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeFromAlbum() : Method\Market\RemoveFromAlbum
    {
        return new Method\Market\RemoveFromAlbum($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderAlbums() : Method\Market\ReorderAlbums
    {
        return new Method\Market\ReorderAlbums($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderItems() : Method\Market\ReorderItems
    {
        return new Method\Market\ReorderItems($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function report() : Method\Market\Report
    {
        return new Method\Market\Report($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reportComment() : Method\Market\ReportComment
    {
        return new Method\Market\ReportComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restore() : Method\Market\Restore
    {
        return new Method\Market\Restore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restoreComment() : Method\Market\RestoreComment
    {
        return new Method\Market\RestoreComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Market\Search
    {
        return new Method\Market\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function searchItems() : Method\Market\SearchItems
    {
        return new Method\Market\SearchItems($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}