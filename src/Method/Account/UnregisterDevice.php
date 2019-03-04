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
        parent::__construct($client, $defaultQuery);
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
}