<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Messages
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
    public function getConversations() : Method\Messages\GetConversations
    {
        return new Method\Messages\GetConversations($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getConversationsById() : Method\Messages\GetConversationsById
    {
        return new Method\Messages\GetConversationsById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getById() : Method\Messages\GetById
    {
        return new Method\Messages\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getByConversationMessageId() : Method\Messages\GetByConversationMessageId
    {
        return new Method\Messages\GetByConversationMessageId($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function search() : Method\Messages\Search
    {
        return new Method\Messages\Search($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getHistory() : Method\Messages\GetHistory
    {
        return new Method\Messages\GetHistory($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getHistoryAttachments() : Method\Messages\GetHistoryAttachments
    {
        return new Method\Messages\GetHistoryAttachments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function send() : Method\Messages\Send
    {
        return new Method\Messages\Send($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Messages\Edit
    {
        return new Method\Messages\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\Messages\Delete
    {
        return new Method\Messages\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteConversation() : Method\Messages\DeleteConversation
    {
        return new Method\Messages\DeleteConversation($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restore() : Method\Messages\Restore
    {
        return new Method\Messages\Restore($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function markAsRead() : Method\Messages\MarkAsRead
    {
        return new Method\Messages\MarkAsRead($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function markAsImportant() : Method\Messages\MarkAsImportant
    {
        return new Method\Messages\MarkAsImportant($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function markAsImportantConversation() : Method\Messages\MarkAsImportantConversation
    {
        return new Method\Messages\MarkAsImportantConversation($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function markAsAnsweredConversation() : Method\Messages\MarkAsAnsweredConversation
    {
        return new Method\Messages\MarkAsAnsweredConversation($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLongPollServer() : Method\Messages\GetLongPollServer
    {
        return new Method\Messages\GetLongPollServer($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLongPollHistory() : Method\Messages\GetLongPollHistory
    {
        return new Method\Messages\GetLongPollHistory($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createChat() : Method\Messages\CreateChat
    {
        return new Method\Messages\CreateChat($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editChat() : Method\Messages\EditChat
    {
        return new Method\Messages\EditChat($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getConversationMembers() : Method\Messages\GetConversationMembers
    {
        return new Method\Messages\GetConversationMembers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setActivity() : Method\Messages\SetActivity
    {
        return new Method\Messages\SetActivity($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function searchConversations() : Method\Messages\SearchConversations
    {
        return new Method\Messages\SearchConversations($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addChatUser() : Method\Messages\AddChatUser
    {
        return new Method\Messages\AddChatUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function removeChatUser() : Method\Messages\RemoveChatUser
    {
        return new Method\Messages\RemoveChatUser($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLastActivity() : Method\Messages\GetLastActivity
    {
        return new Method\Messages\GetLastActivity($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setChatPhoto() : Method\Messages\SetChatPhoto
    {
        return new Method\Messages\SetChatPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteChatPhoto() : Method\Messages\DeleteChatPhoto
    {
        return new Method\Messages\DeleteChatPhoto($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function denyMessagesFromGroup() : Method\Messages\DenyMessagesFromGroup
    {
        return new Method\Messages\DenyMessagesFromGroup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function allowMessagesFromGroup() : Method\Messages\AllowMessagesFromGroup
    {
        return new Method\Messages\AllowMessagesFromGroup($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function isMessagesFromGroupAllowed() : Method\Messages\IsMessagesFromGroupAllowed
    {
        return new Method\Messages\IsMessagesFromGroupAllowed($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}