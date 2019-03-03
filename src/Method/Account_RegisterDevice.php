<?php

namespace VkApigen\Method;

/**
 * Subscribes an iOS/Android/Windows Phone-based device to receive push notifications
 */
class Account_RegisterDevice extends \VkApigen\BaseMethod
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
        return $this->onCall('account.registerDevice');
    }
    /**
     * Device token used to send notifications. (for mpns, the token shall be URL for sending of notifications)
     *
     * {"type":"string"}
     */
    public function token(string $token) : Account_RegisterDevice
    {
        $this->params['token'] = $token;
        return $this;
    }
    /**
     * String name of device model.
     *
     * {"type":"string"}
     */
    public function _device_model(string $device_model) : Account_RegisterDevice
    {
        $this->params['device_model'] = $device_model;
        return $this;
    }
    /**
     * Device year.
     *
     * {"type":"int"}
     */
    public function _device_year(int $device_year) : Account_RegisterDevice
    {
        $this->params['device_year'] = $device_year;
        return $this;
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function device_id(string $device_id) : Account_RegisterDevice
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
    /**
     * String version of device operating system.
     *
     * {"type":"string"}
     */
    public function _system_version(string $system_version) : Account_RegisterDevice
    {
        $this->params['system_version'] = $system_version;
        return $this;
    }
    /**
     * Push settings in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"string"}
     */
    public function _settings(string $settings) : Account_RegisterDevice
    {
        $this->params['settings'] = $settings;
        return $this;
    }
}