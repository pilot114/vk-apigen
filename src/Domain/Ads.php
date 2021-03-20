<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Ads
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
    public function addOfficeUsers() : Method\Ads\AddOfficeUsers
    {
        return new Method\Ads\AddOfficeUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function checkLink() : Method\Ads\CheckLink
    {
        return new Method\Ads\CheckLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createAds() : Method\Ads\CreateAds
    {
        return new Method\Ads\CreateAds($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createCampaigns() : Method\Ads\CreateCampaigns
    {
        return new Method\Ads\CreateCampaigns($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createClients() : Method\Ads\CreateClients
    {
        return new Method\Ads\CreateClients($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createTargetGroup() : Method\Ads\CreateTargetGroup
    {
        return new Method\Ads\CreateTargetGroup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteAds() : Method\Ads\DeleteAds
    {
        return new Method\Ads\DeleteAds($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteCampaigns() : Method\Ads\DeleteCampaigns
    {
        return new Method\Ads\DeleteCampaigns($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteClients() : Method\Ads\DeleteClients
    {
        return new Method\Ads\DeleteClients($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteTargetGroup() : Method\Ads\DeleteTargetGroup
    {
        return new Method\Ads\DeleteTargetGroup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAccounts() : Method\Ads\GetAccounts
    {
        return new Method\Ads\GetAccounts($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAds() : Method\Ads\GetAds
    {
        return new Method\Ads\GetAds($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAdsLayout() : Method\Ads\GetAdsLayout
    {
        return new Method\Ads\GetAdsLayout($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAdsTargeting() : Method\Ads\GetAdsTargeting
    {
        return new Method\Ads\GetAdsTargeting($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getBudget() : Method\Ads\GetBudget
    {
        return new Method\Ads\GetBudget($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCampaigns() : Method\Ads\GetCampaigns
    {
        return new Method\Ads\GetCampaigns($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCategories() : Method\Ads\GetCategories
    {
        return new Method\Ads\GetCategories($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getClients() : Method\Ads\GetClients
    {
        return new Method\Ads\GetClients($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getDemographics() : Method\Ads\GetDemographics
    {
        return new Method\Ads\GetDemographics($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getFloodStats() : Method\Ads\GetFloodStats
    {
        return new Method\Ads\GetFloodStats($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLookalikeRequests() : Method\Ads\GetLookalikeRequests
    {
        return new Method\Ads\GetLookalikeRequests($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMusicians() : Method\Ads\GetMusicians
    {
        return new Method\Ads\GetMusicians($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMusiciansByIds() : Method\Ads\GetMusiciansByIds
    {
        return new Method\Ads\GetMusiciansByIds($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getOfficeUsers() : Method\Ads\GetOfficeUsers
    {
        return new Method\Ads\GetOfficeUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPostsReach() : Method\Ads\GetPostsReach
    {
        return new Method\Ads\GetPostsReach($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getRejectionReason() : Method\Ads\GetRejectionReason
    {
        return new Method\Ads\GetRejectionReason($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getStatistics() : Method\Ads\GetStatistics
    {
        return new Method\Ads\GetStatistics($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSuggestions() : Method\Ads\GetSuggestions
    {
        return new Method\Ads\GetSuggestions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTargetGroups() : Method\Ads\GetTargetGroups
    {
        return new Method\Ads\GetTargetGroups($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTargetingStats() : Method\Ads\GetTargetingStats
    {
        return new Method\Ads\GetTargetingStats($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUploadURL() : Method\Ads\GetUploadURL
    {
        return new Method\Ads\GetUploadURL($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getVideoUploadURL() : Method\Ads\GetVideoUploadURL
    {
        return new Method\Ads\GetVideoUploadURL($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function importTargetContacts() : Method\Ads\ImportTargetContacts
    {
        return new Method\Ads\ImportTargetContacts($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeOfficeUsers() : Method\Ads\RemoveOfficeUsers
    {
        return new Method\Ads\RemoveOfficeUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function updateAds() : Method\Ads\UpdateAds
    {
        return new Method\Ads\UpdateAds($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function updateCampaigns() : Method\Ads\UpdateCampaigns
    {
        return new Method\Ads\UpdateCampaigns($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function updateClients() : Method\Ads\UpdateClients
    {
        return new Method\Ads\UpdateClients($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function updateOfficeUsers() : Method\Ads\UpdateOfficeUsers
    {
        return new Method\Ads\UpdateOfficeUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function updateTargetGroup() : Method\Ads\UpdateTargetGroup
    {
        return new Method\Ads\UpdateTargetGroup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}