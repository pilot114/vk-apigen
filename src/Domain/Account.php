<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Account
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
    public function ban() : Method\Account\Ban
    {
        return new Method\Account\Ban($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function changePassword() : Method\Account\ChangePassword
    {
        return new Method\Account\ChangePassword($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getActiveOffers() : Method\Account\GetActiveOffers
    {
        return new Method\Account\GetActiveOffers($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getAppPermissions() : Method\Account\GetAppPermissions
    {
        return new Method\Account\GetAppPermissions($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getBanned() : Method\Account\GetBanned
    {
        return new Method\Account\GetBanned($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getCounters() : Method\Account\GetCounters
    {
        return new Method\Account\GetCounters($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getInfo() : Method\Account\GetInfo
    {
        return new Method\Account\GetInfo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getProfileInfo() : Method\Account\GetProfileInfo
    {
        return new Method\Account\GetProfileInfo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function getPushSettings() : Method\Account\GetPushSettings
    {
        return new Method\Account\GetPushSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function registerDevice() : Method\Account\RegisterDevice
    {
        return new Method\Account\RegisterDevice($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function saveProfileInfo() : Method\Account\SaveProfileInfo
    {
        return new Method\Account\SaveProfileInfo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setInfo() : Method\Account\SetInfo
    {
        return new Method\Account\SetInfo($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setNameInMenu() : Method\Account\SetNameInMenu
    {
        return new Method\Account\SetNameInMenu($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setOffline() : Method\Account\SetOffline
    {
        return new Method\Account\SetOffline($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setOnline() : Method\Account\SetOnline
    {
        return new Method\Account\SetOnline($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setPushSettings() : Method\Account\SetPushSettings
    {
        return new Method\Account\SetPushSettings($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function setSilenceMode() : Method\Account\SetSilenceMode
    {
        return new Method\Account\SetSilenceMode($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unban() : Method\Account\Unban
    {
        return new Method\Account\Unban($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function unregisterDevice() : Method\Account\UnregisterDevice
    {
        return new Method\Account\UnregisterDevice($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}