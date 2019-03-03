<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Ads
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getAccounts() : Method\Ads_GetAccounts
    {
        return new Method\Ads_GetAccounts($this->client, $this->defaultQuery);
    }
    public function getClients() : Method\Ads_GetClients
    {
        return new Method\Ads_GetClients($this->client, $this->defaultQuery);
    }
    public function createClients() : Method\Ads_CreateClients
    {
        return new Method\Ads_CreateClients($this->client, $this->defaultQuery);
    }
    public function updateClients() : Method\Ads_UpdateClients
    {
        return new Method\Ads_UpdateClients($this->client, $this->defaultQuery);
    }
    public function deleteClients() : Method\Ads_DeleteClients
    {
        return new Method\Ads_DeleteClients($this->client, $this->defaultQuery);
    }
    public function getCampaigns() : Method\Ads_GetCampaigns
    {
        return new Method\Ads_GetCampaigns($this->client, $this->defaultQuery);
    }
    public function createCampaigns() : Method\Ads_CreateCampaigns
    {
        return new Method\Ads_CreateCampaigns($this->client, $this->defaultQuery);
    }
    public function updateCampaigns() : Method\Ads_UpdateCampaigns
    {
        return new Method\Ads_UpdateCampaigns($this->client, $this->defaultQuery);
    }
    public function deleteCampaigns() : Method\Ads_DeleteCampaigns
    {
        return new Method\Ads_DeleteCampaigns($this->client, $this->defaultQuery);
    }
    public function getAds() : Method\Ads_GetAds
    {
        return new Method\Ads_GetAds($this->client, $this->defaultQuery);
    }
    public function getAdsLayout() : Method\Ads_GetAdsLayout
    {
        return new Method\Ads_GetAdsLayout($this->client, $this->defaultQuery);
    }
    public function getAdsTargeting() : Method\Ads_GetAdsTargeting
    {
        return new Method\Ads_GetAdsTargeting($this->client, $this->defaultQuery);
    }
    public function createAds() : Method\Ads_CreateAds
    {
        return new Method\Ads_CreateAds($this->client, $this->defaultQuery);
    }
    public function updateAds() : Method\Ads_UpdateAds
    {
        return new Method\Ads_UpdateAds($this->client, $this->defaultQuery);
    }
    public function deleteAds() : Method\Ads_DeleteAds
    {
        return new Method\Ads_DeleteAds($this->client, $this->defaultQuery);
    }
    public function checkLink() : Method\Ads_CheckLink
    {
        return new Method\Ads_CheckLink($this->client, $this->defaultQuery);
    }
    public function getStatistics() : Method\Ads_GetStatistics
    {
        return new Method\Ads_GetStatistics($this->client, $this->defaultQuery);
    }
    public function getDemographics() : Method\Ads_GetDemographics
    {
        return new Method\Ads_GetDemographics($this->client, $this->defaultQuery);
    }
    public function getAdsPostsReach() : Method\Ads_GetAdsPostsReach
    {
        return new Method\Ads_GetAdsPostsReach($this->client, $this->defaultQuery);
    }
    public function getBudget() : Method\Ads_GetBudget
    {
        return new Method\Ads_GetBudget($this->client, $this->defaultQuery);
    }
    public function getOfficeUsers() : Method\Ads_GetOfficeUsers
    {
        return new Method\Ads_GetOfficeUsers($this->client, $this->defaultQuery);
    }
    public function addOfficeUsers() : Method\Ads_AddOfficeUsers
    {
        return new Method\Ads_AddOfficeUsers($this->client, $this->defaultQuery);
    }
    public function removeOfficeUsers() : Method\Ads_RemoveOfficeUsers
    {
        return new Method\Ads_RemoveOfficeUsers($this->client, $this->defaultQuery);
    }
    public function getTargetingStats() : Method\Ads_GetTargetingStats
    {
        return new Method\Ads_GetTargetingStats($this->client, $this->defaultQuery);
    }
    public function getSuggestions() : Method\Ads_GetSuggestions
    {
        return new Method\Ads_GetSuggestions($this->client, $this->defaultQuery);
    }
    public function getCategories() : Method\Ads_GetCategories
    {
        return new Method\Ads_GetCategories($this->client, $this->defaultQuery);
    }
    public function getUploadURL() : Method\Ads_GetUploadURL
    {
        return new Method\Ads_GetUploadURL($this->client, $this->defaultQuery);
    }
    public function getVideoUploadURL() : Method\Ads_GetVideoUploadURL
    {
        return new Method\Ads_GetVideoUploadURL($this->client, $this->defaultQuery);
    }
    public function getFloodStats() : Method\Ads_GetFloodStats
    {
        return new Method\Ads_GetFloodStats($this->client, $this->defaultQuery);
    }
    public function getRejectionReason() : Method\Ads_GetRejectionReason
    {
        return new Method\Ads_GetRejectionReason($this->client, $this->defaultQuery);
    }
    public function createTargetGroup() : Method\Ads_CreateTargetGroup
    {
        return new Method\Ads_CreateTargetGroup($this->client, $this->defaultQuery);
    }
    public function updateTargetGroup() : Method\Ads_UpdateTargetGroup
    {
        return new Method\Ads_UpdateTargetGroup($this->client, $this->defaultQuery);
    }
    public function deleteTargetGroup() : Method\Ads_DeleteTargetGroup
    {
        return new Method\Ads_DeleteTargetGroup($this->client, $this->defaultQuery);
    }
    public function getTargetGroups() : Method\Ads_GetTargetGroups
    {
        return new Method\Ads_GetTargetGroups($this->client, $this->defaultQuery);
    }
    public function importTargetContacts() : Method\Ads_ImportTargetContacts
    {
        return new Method\Ads_ImportTargetContacts($this->client, $this->defaultQuery);
    }
}