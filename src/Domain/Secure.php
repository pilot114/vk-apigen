<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Secure
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getAppBalance() : Method\Secure_GetAppBalance
    {
        return new Method\Secure_GetAppBalance($this->client, $this->defaultQuery);
    }
    public function getTransactionsHistory() : Method\Secure_GetTransactionsHistory
    {
        return new Method\Secure_GetTransactionsHistory($this->client, $this->defaultQuery);
    }
    public function getSMSHistory() : Method\Secure_GetSMSHistory
    {
        return new Method\Secure_GetSMSHistory($this->client, $this->defaultQuery);
    }
    public function sendSMSNotification() : Method\Secure_SendSMSNotification
    {
        return new Method\Secure_SendSMSNotification($this->client, $this->defaultQuery);
    }
    public function sendNotification() : Method\Secure_SendNotification
    {
        return new Method\Secure_SendNotification($this->client, $this->defaultQuery);
    }
    public function setCounter() : Method\Secure_SetCounter
    {
        return new Method\Secure_SetCounter($this->client, $this->defaultQuery);
    }
    public function setUserLevel() : Method\Secure_SetUserLevel
    {
        return new Method\Secure_SetUserLevel($this->client, $this->defaultQuery);
    }
    public function getUserLevel() : Method\Secure_GetUserLevel
    {
        return new Method\Secure_GetUserLevel($this->client, $this->defaultQuery);
    }
    public function addAppEvent() : Method\Secure_AddAppEvent
    {
        return new Method\Secure_AddAppEvent($this->client, $this->defaultQuery);
    }
    public function checkToken() : Method\Secure_CheckToken
    {
        return new Method\Secure_CheckToken($this->client, $this->defaultQuery);
    }
}