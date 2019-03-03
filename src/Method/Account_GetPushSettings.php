<?php

namespace VkApigen\Method;

/**
 * Gets settings of push notifications.
 */
class Account_GetPushSettings extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.getPushSettings');
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function _device_id(string $device_id) : Account_GetPushSettings
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
}