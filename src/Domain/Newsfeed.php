<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Newsfeed
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
    public function get() : Method\Newsfeed\Get
    {
        return new Method\Newsfeed\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getRecommended() : Method\Newsfeed\GetRecommended
    {
        return new Method\Newsfeed\GetRecommended($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComments() : Method\Newsfeed\GetComments
    {
        return new Method\Newsfeed\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMentions() : Method\Newsfeed\GetMentions
    {
        return new Method\Newsfeed\GetMentions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getBanned() : Method\Newsfeed\GetBanned
    {
        return new Method\Newsfeed\GetBanned($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addBan() : Method\Newsfeed\AddBan
    {
        return new Method\Newsfeed\AddBan($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteBan() : Method\Newsfeed\DeleteBan
    {
        return new Method\Newsfeed\DeleteBan($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function ignoreItem() : Method\Newsfeed\IgnoreItem
    {
        return new Method\Newsfeed\IgnoreItem($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unignoreItem() : Method\Newsfeed\UnignoreItem
    {
        return new Method\Newsfeed\UnignoreItem($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Newsfeed\Search
    {
        return new Method\Newsfeed\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLists() : Method\Newsfeed\GetLists
    {
        return new Method\Newsfeed\GetLists($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveList() : Method\Newsfeed\SaveList
    {
        return new Method\Newsfeed\SaveList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteList() : Method\Newsfeed\DeleteList
    {
        return new Method\Newsfeed\DeleteList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unsubscribe() : Method\Newsfeed\Unsubscribe
    {
        return new Method\Newsfeed\Unsubscribe($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSuggestedSources() : Method\Newsfeed\GetSuggestedSources
    {
        return new Method\Newsfeed\GetSuggestedSources($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}