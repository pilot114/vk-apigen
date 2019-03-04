<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Polls
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
    public function getById() : Method\Polls\GetById
    {
        return new Method\Polls\GetById($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addVote() : Method\Polls\AddVote
    {
        return new Method\Polls\AddVote($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function deleteVote() : Method\Polls\DeleteVote
    {
        return new Method\Polls\DeleteVote($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getVoters() : Method\Polls\GetVoters
    {
        return new Method\Polls\GetVoters($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function create() : Method\Polls\Create
    {
        return new Method\Polls\Create($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function edit() : Method\Polls\Edit
    {
        return new Method\Polls\Edit($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}