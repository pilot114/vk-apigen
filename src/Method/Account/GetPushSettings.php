<?php

namespace VkApigen\Method\Account;

/**
 * Gets settings of push notifications.
 */
class GetPushSettings extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _device_id(string $device_id) : self
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
}