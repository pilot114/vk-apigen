<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Groups
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
    public function addAddress() : Method\Groups\AddAddress
    {
        return new Method\Groups\AddAddress($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addCallbackServer() : Method\Groups\AddCallbackServer
    {
        return new Method\Groups\AddCallbackServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addLink() : Method\Groups\AddLink
    {
        return new Method\Groups\AddLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function approveRequest() : Method\Groups\ApproveRequest
    {
        return new Method\Groups\ApproveRequest($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function ban() : Method\Groups\Ban
    {
        return new Method\Groups\Ban($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function create() : Method\Groups\Create
    {
        return new Method\Groups\Create($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteAddress() : Method\Groups\DeleteAddress
    {
        return new Method\Groups\DeleteAddress($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteCallbackServer() : Method\Groups\DeleteCallbackServer
    {
        return new Method\Groups\DeleteCallbackServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteLink() : Method\Groups\DeleteLink
    {
        return new Method\Groups\DeleteLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function disableOnline() : Method\Groups\DisableOnline
    {
        return new Method\Groups\DisableOnline($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Groups\Edit
    {
        return new Method\Groups\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editAddress() : Method\Groups\EditAddress
    {
        return new Method\Groups\EditAddress($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editCallbackServer() : Method\Groups\EditCallbackServer
    {
        return new Method\Groups\EditCallbackServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editLink() : Method\Groups\EditLink
    {
        return new Method\Groups\EditLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editManager() : Method\Groups\EditManager
    {
        return new Method\Groups\EditManager($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function enableOnline() : Method\Groups\EnableOnline
    {
        return new Method\Groups\EnableOnline($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Groups\Get
    {
        return new Method\Groups\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAddresses() : Method\Groups\GetAddresses
    {
        return new Method\Groups\GetAddresses($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getBanned() : Method\Groups\GetBanned
    {
        return new Method\Groups\GetBanned($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Groups\GetById
    {
        return new Method\Groups\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCallbackConfirmationCode() : Method\Groups\GetCallbackConfirmationCode
    {
        return new Method\Groups\GetCallbackConfirmationCode($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCallbackServers() : Method\Groups\GetCallbackServers
    {
        return new Method\Groups\GetCallbackServers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCallbackSettings() : Method\Groups\GetCallbackSettings
    {
        return new Method\Groups\GetCallbackSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCatalog() : Method\Groups\GetCatalog
    {
        return new Method\Groups\GetCatalog($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCatalogInfo() : Method\Groups\GetCatalogInfo
    {
        return new Method\Groups\GetCatalogInfo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getInvitedUsers() : Method\Groups\GetInvitedUsers
    {
        return new Method\Groups\GetInvitedUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getInvites() : Method\Groups\GetInvites
    {
        return new Method\Groups\GetInvites($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLongPollServer() : Method\Groups\GetLongPollServer
    {
        return new Method\Groups\GetLongPollServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLongPollSettings() : Method\Groups\GetLongPollSettings
    {
        return new Method\Groups\GetLongPollSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMembers() : Method\Groups\GetMembers
    {
        return new Method\Groups\GetMembers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getRequests() : Method\Groups\GetRequests
    {
        return new Method\Groups\GetRequests($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSettings() : Method\Groups\GetSettings
    {
        return new Method\Groups\GetSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTagList() : Method\Groups\GetTagList
    {
        return new Method\Groups\GetTagList($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTokenPermissions() : Method\Groups\GetTokenPermissions
    {
        return new Method\Groups\GetTokenPermissions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function invite() : Method\Groups\Invite
    {
        return new Method\Groups\Invite($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function isMember() : Method\Groups\IsMember
    {
        return new Method\Groups\IsMember($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function join() : Method\Groups\Join
    {
        return new Method\Groups\Join($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function leave() : Method\Groups\Leave
    {
        return new Method\Groups\Leave($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeUser() : Method\Groups\RemoveUser
    {
        return new Method\Groups\RemoveUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderLink() : Method\Groups\ReorderLink
    {
        return new Method\Groups\ReorderLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Groups\Search
    {
        return new Method\Groups\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setCallbackSettings() : Method\Groups\SetCallbackSettings
    {
        return new Method\Groups\SetCallbackSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setLongPollSettings() : Method\Groups\SetLongPollSettings
    {
        return new Method\Groups\SetLongPollSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setSettings() : Method\Groups\SetSettings
    {
        return new Method\Groups\SetSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setUserNote() : Method\Groups\SetUserNote
    {
        return new Method\Groups\SetUserNote($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function tagAdd() : Method\Groups\TagAdd
    {
        return new Method\Groups\TagAdd($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function tagBind() : Method\Groups\TagBind
    {
        return new Method\Groups\TagBind($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function tagDelete() : Method\Groups\TagDelete
    {
        return new Method\Groups\TagDelete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function tagUpdate() : Method\Groups\TagUpdate
    {
        return new Method\Groups\TagUpdate($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function toggleMarket() : Method\Groups\ToggleMarket
    {
        return new Method\Groups\ToggleMarket($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unban() : Method\Groups\Unban
    {
        return new Method\Groups\Unban($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}