<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Secure
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
    public function getAppBalance() : Method\Secure\GetAppBalance
    {
        return new Method\Secure\GetAppBalance($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getTransactionsHistory() : Method\Secure\GetTransactionsHistory
    {
        return new Method\Secure\GetTransactionsHistory($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getSMSHistory() : Method\Secure\GetSMSHistory
    {
        return new Method\Secure\GetSMSHistory($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function sendSMSNotification() : Method\Secure\SendSMSNotification
    {
        return new Method\Secure\SendSMSNotification($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function sendNotification() : Method\Secure\SendNotification
    {
        return new Method\Secure\SendNotification($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setCounter() : Method\Secure\SetCounter
    {
        return new Method\Secure\SetCounter($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setUserLevel() : Method\Secure\SetUserLevel
    {
        return new Method\Secure\SetUserLevel($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getUserLevel() : Method\Secure\GetUserLevel
    {
        return new Method\Secure\GetUserLevel($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function addAppEvent() : Method\Secure\AddAppEvent
    {
        return new Method\Secure\AddAppEvent($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function checkToken() : Method\Secure\CheckToken
    {
        return new Method\Secure\CheckToken($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}