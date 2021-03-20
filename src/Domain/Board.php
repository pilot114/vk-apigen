<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Board
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
    public function addTopic() : Method\Board\AddTopic
    {
        return new Method\Board\AddTopic($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function closeTopic() : Method\Board\CloseTopic
    {
        return new Method\Board\CloseTopic($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function createComment() : Method\Board\CreateComment
    {
        return new Method\Board\CreateComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteComment() : Method\Board\DeleteComment
    {
        return new Method\Board\DeleteComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteTopic() : Method\Board\DeleteTopic
    {
        return new Method\Board\DeleteTopic($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editComment() : Method\Board\EditComment
    {
        return new Method\Board\EditComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function editTopic() : Method\Board\EditTopic
    {
        return new Method\Board\EditTopic($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function fixTopic() : Method\Board\FixTopic
    {
        return new Method\Board\FixTopic($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getComments() : Method\Board\GetComments
    {
        return new Method\Board\GetComments($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTopics() : Method\Board\GetTopics
    {
        return new Method\Board\GetTopics($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function openTopic() : Method\Board\OpenTopic
    {
        return new Method\Board\OpenTopic($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function restoreComment() : Method\Board\RestoreComment
    {
        return new Method\Board\RestoreComment($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unfixTopic() : Method\Board\UnfixTopic
    {
        return new Method\Board\UnfixTopic($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}