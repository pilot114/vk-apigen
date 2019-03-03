<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Auth
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function checkPhone() : Method\Auth_CheckPhone
    {
        return new Method\Auth_CheckPhone($this->client, $this->defaultQuery);
    }
    public function signup() : Method\Auth_Signup
    {
        return new Method\Auth_Signup($this->client, $this->defaultQuery);
    }
    public function confirm() : Method\Auth_Confirm
    {
        return new Method\Auth_Confirm($this->client, $this->defaultQuery);
    }
    public function restore() : Method\Auth_Restore
    {
        return new Method\Auth_Restore($this->client, $this->defaultQuery);
    }
}