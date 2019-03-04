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
    public function isMember() : Method\Groups\IsMember
    {
        return new Method\Groups\IsMember($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Groups\GetById
    {
        return new Method\Groups\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\Groups\Get
    {
        return new Method\Groups\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getMembers() : Method\Groups\GetMembers
    {
        return new Method\Groups\GetMembers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function join() : Method\Groups\Join
    {
        return new Method\Groups\Join($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function leave() : Method\Groups\Leave
    {
        return new Method\Groups\Leave($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Groups\Search
    {
        return new Method\Groups\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCatalog() : Method\Groups\GetCatalog
    {
        return new Method\Groups\GetCatalog($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCatalogInfo() : Method\Groups\GetCatalogInfo
    {
        return new Method\Groups\GetCatalogInfo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getInvites() : Method\Groups\GetInvites
    {
        return new Method\Groups\GetInvites($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getInvitedUsers() : Method\Groups\GetInvitedUsers
    {
        return new Method\Groups\GetInvitedUsers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function banUser() : Method\Groups\BanUser
    {
        return new Method\Groups\BanUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unbanUser() : Method\Groups\UnbanUser
    {
        return new Method\Groups\UnbanUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getBanned() : Method\Groups\GetBanned
    {
        return new Method\Groups\GetBanned($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function create() : Method\Groups\Create
    {
        return new Method\Groups\Create($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Groups\Edit
    {
        return new Method\Groups\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editPlace() : Method\Groups\EditPlace
    {
        return new Method\Groups\EditPlace($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSettings() : Method\Groups\GetSettings
    {
        return new Method\Groups\GetSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getRequests() : Method\Groups\GetRequests
    {
        return new Method\Groups\GetRequests($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editManager() : Method\Groups\EditManager
    {
        return new Method\Groups\EditManager($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function invite() : Method\Groups\Invite
    {
        return new Method\Groups\Invite($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addLink() : Method\Groups\AddLink
    {
        return new Method\Groups\AddLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteLink() : Method\Groups\DeleteLink
    {
        return new Method\Groups\DeleteLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editLink() : Method\Groups\EditLink
    {
        return new Method\Groups\EditLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function reorderLink() : Method\Groups\ReorderLink
    {
        return new Method\Groups\ReorderLink($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeUser() : Method\Groups\RemoveUser
    {
        return new Method\Groups\RemoveUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function approveRequest() : Method\Groups\ApproveRequest
    {
        return new Method\Groups\ApproveRequest($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCallbackConfirmationCode() : Method\Groups\GetCallbackConfirmationCode
    {
        return new Method\Groups\GetCallbackConfirmationCode($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCallbackSettings() : Method\Groups\GetCallbackSettings
    {
        return new Method\Groups\GetCallbackSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setCallbackSettings() : Method\Groups\SetCallbackSettings
    {
        return new Method\Groups\SetCallbackSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLongPollServer() : Method\Groups\GetLongPollServer
    {
        return new Method\Groups\GetLongPollServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLongPollSettings() : Method\Groups\GetLongPollSettings
    {
        return new Method\Groups\GetLongPollSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setLongPollSettings() : Method\Groups\SetLongPollSettings
    {
        return new Method\Groups\SetLongPollSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}