<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Messages
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getConversations() : Method\Messages_GetConversations
    {
        return new Method\Messages_GetConversations($this->client, $this->defaultQuery);
    }
    public function getConversationsById() : Method\Messages_GetConversationsById
    {
        return new Method\Messages_GetConversationsById($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Messages_GetById
    {
        return new Method\Messages_GetById($this->client, $this->defaultQuery);
    }
    public function getByConversationMessageId() : Method\Messages_GetByConversationMessageId
    {
        return new Method\Messages_GetByConversationMessageId($this->client, $this->defaultQuery);
    }
    public function search() : Method\Messages_Search
    {
        return new Method\Messages_Search($this->client, $this->defaultQuery);
    }
    public function getHistory() : Method\Messages_GetHistory
    {
        return new Method\Messages_GetHistory($this->client, $this->defaultQuery);
    }
    public function getHistoryAttachments() : Method\Messages_GetHistoryAttachments
    {
        return new Method\Messages_GetHistoryAttachments($this->client, $this->defaultQuery);
    }
    public function send() : Method\Messages_Send
    {
        return new Method\Messages_Send($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Messages_Edit
    {
        return new Method\Messages_Edit($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Messages_Delete
    {
        return new Method\Messages_Delete($this->client, $this->defaultQuery);
    }
    public function deleteConversation() : Method\Messages_DeleteConversation
    {
        return new Method\Messages_DeleteConversation($this->client, $this->defaultQuery);
    }
    public function restore() : Method\Messages_Restore
    {
        return new Method\Messages_Restore($this->client, $this->defaultQuery);
    }
    public function markAsRead() : Method\Messages_MarkAsRead
    {
        return new Method\Messages_MarkAsRead($this->client, $this->defaultQuery);
    }
    public function markAsImportant() : Method\Messages_MarkAsImportant
    {
        return new Method\Messages_MarkAsImportant($this->client, $this->defaultQuery);
    }
    public function markAsImportantConversation() : Method\Messages_MarkAsImportantConversation
    {
        return new Method\Messages_MarkAsImportantConversation($this->client, $this->defaultQuery);
    }
    public function markAsAnsweredConversation() : Method\Messages_MarkAsAnsweredConversation
    {
        return new Method\Messages_MarkAsAnsweredConversation($this->client, $this->defaultQuery);
    }
    public function getLongPollServer() : Method\Messages_GetLongPollServer
    {
        return new Method\Messages_GetLongPollServer($this->client, $this->defaultQuery);
    }
    public function getLongPollHistory() : Method\Messages_GetLongPollHistory
    {
        return new Method\Messages_GetLongPollHistory($this->client, $this->defaultQuery);
    }
    public function createChat() : Method\Messages_CreateChat
    {
        return new Method\Messages_CreateChat($this->client, $this->defaultQuery);
    }
    public function editChat() : Method\Messages_EditChat
    {
        return new Method\Messages_EditChat($this->client, $this->defaultQuery);
    }
    public function getConversationMembers() : Method\Messages_GetConversationMembers
    {
        return new Method\Messages_GetConversationMembers($this->client, $this->defaultQuery);
    }
    public function setActivity() : Method\Messages_SetActivity
    {
        return new Method\Messages_SetActivity($this->client, $this->defaultQuery);
    }
    public function searchConversations() : Method\Messages_SearchConversations
    {
        return new Method\Messages_SearchConversations($this->client, $this->defaultQuery);
    }
    public function addChatUser() : Method\Messages_AddChatUser
    {
        return new Method\Messages_AddChatUser($this->client, $this->defaultQuery);
    }
    public function removeChatUser() : Method\Messages_RemoveChatUser
    {
        return new Method\Messages_RemoveChatUser($this->client, $this->defaultQuery);
    }
    public function getLastActivity() : Method\Messages_GetLastActivity
    {
        return new Method\Messages_GetLastActivity($this->client, $this->defaultQuery);
    }
    public function setChatPhoto() : Method\Messages_SetChatPhoto
    {
        return new Method\Messages_SetChatPhoto($this->client, $this->defaultQuery);
    }
    public function deleteChatPhoto() : Method\Messages_DeleteChatPhoto
    {
        return new Method\Messages_DeleteChatPhoto($this->client, $this->defaultQuery);
    }
    public function denyMessagesFromGroup() : Method\Messages_DenyMessagesFromGroup
    {
        return new Method\Messages_DenyMessagesFromGroup($this->client, $this->defaultQuery);
    }
    public function allowMessagesFromGroup() : Method\Messages_AllowMessagesFromGroup
    {
        return new Method\Messages_AllowMessagesFromGroup($this->client, $this->defaultQuery);
    }
    public function isMessagesFromGroupAllowed() : Method\Messages_IsMessagesFromGroupAllowed
    {
        return new Method\Messages_IsMessagesFromGroupAllowed($this->client, $this->defaultQuery);
    }
}