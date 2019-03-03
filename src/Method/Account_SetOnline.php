<?php

namespace VkApigen\Method;

/**
 * Marks the current user as online for 15 minutes.
 */
class Account_SetOnline extends \VkApigen\BaseMethod
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
        return $this->onCall('account.setOnline');
    }
    /**
     * '1' if videocalls are available for current device.
     *
     * {"type":"bool"}
     */
    public function _voip(bool $voip) : Account_SetOnline
    {
        $this->params['voip'] = $voip;
        return $this;
    }
}