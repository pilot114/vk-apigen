<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Board
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getTopics() : Method\Board_GetTopics
    {
        return new Method\Board_GetTopics($this->client, $this->defaultQuery);
    }
    public function getComments() : Method\Board_GetComments
    {
        return new Method\Board_GetComments($this->client, $this->defaultQuery);
    }
    public function addTopic() : Method\Board_AddTopic
    {
        return new Method\Board_AddTopic($this->client, $this->defaultQuery);
    }
    public function createComment() : Method\Board_CreateComment
    {
        return new Method\Board_CreateComment($this->client, $this->defaultQuery);
    }
    public function deleteTopic() : Method\Board_DeleteTopic
    {
        return new Method\Board_DeleteTopic($this->client, $this->defaultQuery);
    }
    public function editTopic() : Method\Board_EditTopic
    {
        return new Method\Board_EditTopic($this->client, $this->defaultQuery);
    }
    public function editComment() : Method\Board_EditComment
    {
        return new Method\Board_EditComment($this->client, $this->defaultQuery);
    }
    public function restoreComment() : Method\Board_RestoreComment
    {
        return new Method\Board_RestoreComment($this->client, $this->defaultQuery);
    }
    public function deleteComment() : Method\Board_DeleteComment
    {
        return new Method\Board_DeleteComment($this->client, $this->defaultQuery);
    }
    public function openTopic() : Method\Board_OpenTopic
    {
        return new Method\Board_OpenTopic($this->client, $this->defaultQuery);
    }
    public function closeTopic() : Method\Board_CloseTopic
    {
        return new Method\Board_CloseTopic($this->client, $this->defaultQuery);
    }
    public function fixTopic() : Method\Board_FixTopic
    {
        return new Method\Board_FixTopic($this->client, $this->defaultQuery);
    }
    public function unfixTopic() : Method\Board_UnfixTopic
    {
        return new Method\Board_UnfixTopic($this->client, $this->defaultQuery);
    }
}