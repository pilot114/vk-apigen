<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Polls
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getById() : Method\Polls_GetById
    {
        return new Method\Polls_GetById($this->client, $this->defaultQuery);
    }
    public function addVote() : Method\Polls_AddVote
    {
        return new Method\Polls_AddVote($this->client, $this->defaultQuery);
    }
    public function deleteVote() : Method\Polls_DeleteVote
    {
        return new Method\Polls_DeleteVote($this->client, $this->defaultQuery);
    }
    public function getVoters() : Method\Polls_GetVoters
    {
        return new Method\Polls_GetVoters($this->client, $this->defaultQuery);
    }
    public function create() : Method\Polls_Create
    {
        return new Method\Polls_Create($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Polls_Edit
    {
        return new Method\Polls_Edit($this->client, $this->defaultQuery);
    }
}