<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Fave
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
    public function addArticle() : Method\Fave\AddArticle
    {
        return new Method\Fave\AddArticle($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addLink() : Method\Fave\AddLink
    {
        return new Method\Fave\AddLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addPage() : Method\Fave\AddPage
    {
        return new Method\Fave\AddPage($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addPost() : Method\Fave\AddPost
    {
        return new Method\Fave\AddPost($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addProduct() : Method\Fave\AddProduct
    {
        return new Method\Fave\AddProduct($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addTag() : Method\Fave\AddTag
    {
        return new Method\Fave\AddTag($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addVideo() : Method\Fave\AddVideo
    {
        return new Method\Fave\AddVideo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editTag() : Method\Fave\EditTag
    {
        return new Method\Fave\EditTag($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Fave\Get
    {
        return new Method\Fave\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPages() : Method\Fave\GetPages
    {
        return new Method\Fave\GetPages($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTags() : Method\Fave\GetTags
    {
        return new Method\Fave\GetTags($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function markSeen() : Method\Fave\MarkSeen
    {
        return new Method\Fave\MarkSeen($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeArticle() : Method\Fave\RemoveArticle
    {
        return new Method\Fave\RemoveArticle($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeLink() : Method\Fave\RemoveLink
    {
        return new Method\Fave\RemoveLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removePage() : Method\Fave\RemovePage
    {
        return new Method\Fave\RemovePage($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removePost() : Method\Fave\RemovePost
    {
        return new Method\Fave\RemovePost($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeProduct() : Method\Fave\RemoveProduct
    {
        return new Method\Fave\RemoveProduct($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeTag() : Method\Fave\RemoveTag
    {
        return new Method\Fave\RemoveTag($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeVideo() : Method\Fave\RemoveVideo
    {
        return new Method\Fave\RemoveVideo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderTags() : Method\Fave\ReorderTags
    {
        return new Method\Fave\ReorderTags($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setPageTags() : Method\Fave\SetPageTags
    {
        return new Method\Fave\SetPageTags($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setTags() : Method\Fave\SetTags
    {
        return new Method\Fave\SetTags($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function trackPageInteraction() : Method\Fave\TrackPageInteraction
    {
        return new Method\Fave\TrackPageInteraction($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}