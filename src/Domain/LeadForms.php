<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class LeadForms
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
    public function create() : Method\LeadForms\Create
    {
        return new Method\LeadForms\Create($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function delete() : Method\LeadForms\Delete
    {
        return new Method\LeadForms\Delete($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function get() : Method\LeadForms\Get
    {
        return new Method\LeadForms\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getLeads() : Method\LeadForms\GetLeads
    {
        return new Method\LeadForms\GetLeads($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUploadURL() : Method\LeadForms\GetUploadURL
    {
        return new Method\LeadForms\GetUploadURL($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function list() : Method\LeadForms\List
    {
        return new Method\LeadForms\List($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function update() : Method\LeadForms\Update
    {
        return new Method\LeadForms\Update($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}