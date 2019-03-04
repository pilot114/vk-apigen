<?php

namespace VkApigen\Method\Account;

/**
 * Change push settings.
 */
class SetPushSettings extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function device_id(string $device_id) : self
    {
        $this->params['device_id'] = $device_id;
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
     * Notification key.
     *
     * {"type":"string"}
     */
    public function _key(string $key) : self
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * New value for the key in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _value(array $value) : self
    {
        $this->params['value'] = $value;
        return $this;
    }
}