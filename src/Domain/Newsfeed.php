<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Newsfeed
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Newsfeed_Get
    {
        return new Method\Newsfeed_Get($this->client, $this->defaultQuery);
    }
    public function getRecommended() : Method\Newsfeed_GetRecommended
    {
        return new Method\Newsfeed_GetRecommended($this->client, $this->defaultQuery);
    }
    public function getComments() : Method\Newsfeed_GetComments
    {
        return new Method\Newsfeed_GetComments($this->client, $this->defaultQuery);
    }
    public function getMentions() : Method\Newsfeed_GetMentions
    {
        return new Method\Newsfeed_GetMentions($this->client, $this->defaultQuery);
    }
    public function getBanned() : Method\Newsfeed_GetBanned
    {
        return new Method\Newsfeed_GetBanned($this->client, $this->defaultQuery);
    }
    public function addBan() : Method\Newsfeed_AddBan
    {
        return new Method\Newsfeed_AddBan($this->client, $this->defaultQuery);
    }
    public function deleteBan() : Method\Newsfeed_DeleteBan
    {
        return new Method\Newsfeed_DeleteBan($this->client, $this->defaultQuery);
    }
    public function ignoreItem() : Method\Newsfeed_IgnoreItem
    {
        return new Method\Newsfeed_IgnoreItem($this->client, $this->defaultQuery);
    }
    public function unignoreItem() : Method\Newsfeed_UnignoreItem
    {
        return new Method\Newsfeed_UnignoreItem($this->client, $this->defaultQuery);
    }
    public function search() : Method\Newsfeed_Search
    {
        return new Method\Newsfeed_Search($this->client, $this->defaultQuery);
    }
    public function getLists() : Method\Newsfeed_GetLists
    {
        return new Method\Newsfeed_GetLists($this->client, $this->defaultQuery);
    }
    public function saveList() : Method\Newsfeed_SaveList
    {
        return new Method\Newsfeed_SaveList($this->client, $this->defaultQuery);
    }
    public function deleteList() : Method\Newsfeed_DeleteList
    {
        return new Method\Newsfeed_DeleteList($this->client, $this->defaultQuery);
    }
    public function unsubscribe() : Method\Newsfeed_Unsubscribe
    {
        return new Method\Newsfeed_Unsubscribe($this->client, $this->defaultQuery);
    }
    public function getSuggestedSources() : Method\Newsfeed_GetSuggestedSources
    {
        return new Method\Newsfeed_GetSuggestedSources($this->client, $this->defaultQuery);
    }
}