<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Account
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getCounters() : Method\Account_GetCounters
    {
        return new Method\Account_GetCounters($this->client, $this->defaultQuery);
    }
    public function setNameInMenu() : Method\Account_SetNameInMenu
    {
        return new Method\Account_SetNameInMenu($this->client, $this->defaultQuery);
    }
    public function setOnline() : Method\Account_SetOnline
    {
        return new Method\Account_SetOnline($this->client, $this->defaultQuery);
    }
    public function setOffline() : Method\Account_SetOffline
    {
        return new Method\Account_SetOffline($this->client, $this->defaultQuery);
    }
    public function lookupContacts() : Method\Account_LookupContacts
    {
        return new Method\Account_LookupContacts($this->client, $this->defaultQuery);
    }
    public function registerDevice() : Method\Account_RegisterDevice
    {
        return new Method\Account_RegisterDevice($this->client, $this->defaultQuery);
    }
    public function unregisterDevice() : Method\Account_UnregisterDevice
    {
        return new Method\Account_UnregisterDevice($this->client, $this->defaultQuery);
    }
    public function setSilenceMode() : Method\Account_SetSilenceMode
    {
        return new Method\Account_SetSilenceMode($this->client, $this->defaultQuery);
    }
    public function getPushSettings() : Method\Account_GetPushSettings
    {
        return new Method\Account_GetPushSettings($this->client, $this->defaultQuery);
    }
    public function setPushSettings() : Method\Account_SetPushSettings
    {
        return new Method\Account_SetPushSettings($this->client, $this->defaultQuery);
    }
    public function getAppPermissions() : Method\Account_GetAppPermissions
    {
        return new Method\Account_GetAppPermissions($this->client, $this->defaultQuery);
    }
    public function getActiveOffers() : Method\Account_GetActiveOffers
    {
        return new Method\Account_GetActiveOffers($this->client, $this->defaultQuery);
    }
    public function banUser() : Method\Account_BanUser
    {
        return new Method\Account_BanUser($this->client, $this->defaultQuery);
    }
    public function unbanUser() : Method\Account_UnbanUser
    {
        return new Method\Account_UnbanUser($this->client, $this->defaultQuery);
    }
    public function getBanned() : Method\Account_GetBanned
    {
        return new Method\Account_GetBanned($this->client, $this->defaultQuery);
    }
    public function getInfo() : Method\Account_GetInfo
    {
        return new Method\Account_GetInfo($this->client, $this->defaultQuery);
    }
    public function setInfo() : Method\Account_SetInfo
    {
        return new Method\Account_SetInfo($this->client, $this->defaultQuery);
    }
    public function changePassword() : Method\Account_ChangePassword
    {
        return new Method\Account_ChangePassword($this->client, $this->defaultQuery);
    }
    public function getProfileInfo() : Method\Account_GetProfileInfo
    {
        return new Method\Account_GetProfileInfo($this->client, $this->defaultQuery);
    }
    public function saveProfileInfo() : Method\Account_SaveProfileInfo
    {
        return new Method\Account_SaveProfileInfo($this->client, $this->defaultQuery);
    }
}