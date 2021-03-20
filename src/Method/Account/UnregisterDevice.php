<?php

namespace VkApigen\Method\Account;

/**
 * Unsubscribes a device from push notifications.
 */
class UnregisterDevice extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('account.unregisterDevice');
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function _device_id(string $device_id) : self
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _sandbox(bool $sandbox) : self
    {
        $this->params['sandbox'] = $sandbox;
        return $this;
    }
}