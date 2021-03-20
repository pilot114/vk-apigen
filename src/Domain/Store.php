<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Store
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
    public function addStickersToFavorite() : Method\Store\AddStickersToFavorite
    {
        return new Method\Store\AddStickersToFavorite($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getFavoriteStickers() : Method\Store\GetFavoriteStickers
    {
        return new Method\Store\GetFavoriteStickers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getProducts() : Method\Store\GetProducts
    {
        return new Method\Store\GetProducts($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getStickersKeywords() : Method\Store\GetStickersKeywords
    {
        return new Method\Store\GetStickersKeywords($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeStickersFromFavorite() : Method\Store\RemoveStickersFromFavorite
    {
        return new Method\Store\RemoveStickersFromFavorite($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}