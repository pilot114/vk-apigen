<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Groups
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function isMember() : Method\Groups_IsMember
    {
        return new Method\Groups_IsMember($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Groups_GetById
    {
        return new Method\Groups_GetById($this->client, $this->defaultQuery);
    }
    public function get() : Method\Groups_Get
    {
        return new Method\Groups_Get($this->client, $this->defaultQuery);
    }
    public function getMembers() : Method\Groups_GetMembers
    {
        return new Method\Groups_GetMembers($this->client, $this->defaultQuery);
    }
    public function join() : Method\Groups_Join
    {
        return new Method\Groups_Join($this->client, $this->defaultQuery);
    }
    public function leave() : Method\Groups_Leave
    {
        return new Method\Groups_Leave($this->client, $this->defaultQuery);
    }
    public function search() : Method\Groups_Search
    {
        return new Method\Groups_Search($this->client, $this->defaultQuery);
    }
    public function getCatalog() : Method\Groups_GetCatalog
    {
        return new Method\Groups_GetCatalog($this->client, $this->defaultQuery);
    }
    public function getCatalogInfo() : Method\Groups_GetCatalogInfo
    {
        return new Method\Groups_GetCatalogInfo($this->client, $this->defaultQuery);
    }
    public function getInvites() : Method\Groups_GetInvites
    {
        return new Method\Groups_GetInvites($this->client, $this->defaultQuery);
    }
    public function getInvitedUsers() : Method\Groups_GetInvitedUsers
    {
        return new Method\Groups_GetInvitedUsers($this->client, $this->defaultQuery);
    }
    public function banUser() : Method\Groups_BanUser
    {
        return new Method\Groups_BanUser($this->client, $this->defaultQuery);
    }
    public function unbanUser() : Method\Groups_UnbanUser
    {
        return new Method\Groups_UnbanUser($this->client, $this->defaultQuery);
    }
    public function getBanned() : Method\Groups_GetBanned
    {
        return new Method\Groups_GetBanned($this->client, $this->defaultQuery);
    }
    public function create() : Method\Groups_Create
    {
        return new Method\Groups_Create($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Groups_Edit
    {
        return new Method\Groups_Edit($this->client, $this->defaultQuery);
    }
    public function editPlace() : Method\Groups_EditPlace
    {
        return new Method\Groups_EditPlace($this->client, $this->defaultQuery);
    }
    public function getSettings() : Method\Groups_GetSettings
    {
        return new Method\Groups_GetSettings($this->client, $this->defaultQuery);
    }
    public function getRequests() : Method\Groups_GetRequests
    {
        return new Method\Groups_GetRequests($this->client, $this->defaultQuery);
    }
    public function editManager() : Method\Groups_EditManager
    {
        return new Method\Groups_EditManager($this->client, $this->defaultQuery);
    }
    public function invite() : Method\Groups_Invite
    {
        return new Method\Groups_Invite($this->client, $this->defaultQuery);
    }
    public function addLink() : Method\Groups_AddLink
    {
        return new Method\Groups_AddLink($this->client, $this->defaultQuery);
    }
    public function deleteLink() : Method\Groups_DeleteLink
    {
        return new Method\Groups_DeleteLink($this->client, $this->defaultQuery);
    }
    public function editLink() : Method\Groups_EditLink
    {
        return new Method\Groups_EditLink($this->client, $this->defaultQuery);
    }
    public function reorderLink() : Method\Groups_ReorderLink
    {
        return new Method\Groups_ReorderLink($this->client, $this->defaultQuery);
    }
    public function removeUser() : Method\Groups_RemoveUser
    {
        return new Method\Groups_RemoveUser($this->client, $this->defaultQuery);
    }
    public function approveRequest() : Method\Groups_ApproveRequest
    {
        return new Method\Groups_ApproveRequest($this->client, $this->defaultQuery);
    }
    public function getCallbackConfirmationCode() : Method\Groups_GetCallbackConfirmationCode
    {
        return new Method\Groups_GetCallbackConfirmationCode($this->client, $this->defaultQuery);
    }
    public function getCallbackSettings() : Method\Groups_GetCallbackSettings
    {
        return new Method\Groups_GetCallbackSettings($this->client, $this->defaultQuery);
    }
    public function setCallbackSettings() : Method\Groups_SetCallbackSettings
    {
        return new Method\Groups_SetCallbackSettings($this->client, $this->defaultQuery);
    }
    public function getLongPollServer() : Method\Groups_GetLongPollServer
    {
        return new Method\Groups_GetLongPollServer($this->client, $this->defaultQuery);
    }
    public function getLongPollSettings() : Method\Groups_GetLongPollSettings
    {
        return new Method\Groups_GetLongPollSettings($this->client, $this->defaultQuery);
    }
    public function setLongPollSettings() : Method\Groups_SetLongPollSettings
    {
        return new Method\Groups_SetLongPollSettings($this->client, $this->defaultQuery);
    }
}