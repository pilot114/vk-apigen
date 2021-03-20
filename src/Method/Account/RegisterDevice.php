<?php

namespace VkApigen\Method\Account;

/**
 * Subscribes an iOS/Android/Windows Phone-based device to receive push notifications
 */
class RegisterDevice extends \VkApigen\BaseMethod
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
        return $this->onCall('account.registerDevice');
    }
    /**
     * Device token used to send notifications. (for mpns, the token shall be URL for sending of notifications)
     *
     * {"type":"string"}
     */
    public function token(string $token) : self
    {
        $this->params['token'] = $token;
        return $this;
    }
    /**
     * String name of device model.
     *
     * {"type":"string"}
     */
    public function _device_model(string $device_model) : self
    {
        $this->params['device_model'] = $device_model;
        return $this;
    }
    /**
     * Device year.
     *
     * {"type":"int"}
     */
    public function _device_year(int $device_year) : self
    {
        $this->params['device_year'] = $device_year;
        return $this;
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function device_id(string $device_id) : self
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
    /**
     * String version of device operating system.
     *
     * {"type":"string"}
     */
    public function _system_version(string $system_version) : self
    {
        $this->params['system_version'] = $system_version;
        return $this;
    }
    /**
     * Push settings in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"string"}
     */
    public function _settings(string $settings) : self
    {
        $this->params['settings'] = $settings;
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