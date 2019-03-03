<?php

namespace VkApigen\Method;

/**
 * Change push settings.
 */
class Account_SetPushSettings extends \VkApigen\BaseMethod
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
        return $this->onCall('account.setPushSettings');
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function device_id(string $device_id) : Account_SetPushSettings
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
    /**
     * Push settings in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"string"}
     */
    public function _settings(string $settings) : Account_SetPushSettings
    {
        $this->params['settings'] = $settings;
        return $this;
    }
    /**
     * Notification key.
     *
     * {"type":"string"}
     */
    public function _key(string $key) : Account_SetPushSettings
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * New value for the key in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _value(array $value) : Account_SetPushSettings
    {
        $this->params['value'] = $value;
        return $this;
    }
}