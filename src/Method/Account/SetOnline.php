<?php

namespace VkApigen\Method\Account;

/**
 * Marks the current user as online for 15 minutes.
 */
class SetOnline extends \VkApigen\BaseMethod
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
        return $this->onCall('account.setOnline');
    }
    /**
     * '1' if videocalls are available for current device.
     *
     * {"type":"bool"}
     */
    public function _voip(bool $voip) : self
    {
        $this->params['voip'] = $voip;
        return $this;
    }
}