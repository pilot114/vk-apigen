<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class AppWidgets
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
    public function getAppImageUploadServer() : Method\AppWidgets\GetAppImageUploadServer
    {
        return new Method\AppWidgets\GetAppImageUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAppImages() : Method\AppWidgets\GetAppImages
    {
        return new Method\AppWidgets\GetAppImages($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getGroupImageUploadServer() : Method\AppWidgets\GetGroupImageUploadServer
    {
        return new Method\AppWidgets\GetGroupImageUploadServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getGroupImages() : Method\AppWidgets\GetGroupImages
    {
        return new Method\AppWidgets\GetGroupImages($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getImagesById() : Method\AppWidgets\GetImagesById
    {
        return new Method\AppWidgets\GetImagesById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveAppImage() : Method\AppWidgets\SaveAppImage
    {
        return new Method\AppWidgets\SaveAppImage($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveGroupImage() : Method\AppWidgets\SaveGroupImage
    {
        return new Method\AppWidgets\SaveGroupImage($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function update() : Method\AppWidgets\Update
    {
        return new Method\AppWidgets\Update($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}