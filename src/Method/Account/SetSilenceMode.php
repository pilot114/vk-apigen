<?php

namespace VkApigen\Method\Account;

/**
 * Mutes push notifications for the set period of time.
 */
class SetSilenceMode extends \VkApigen\BaseMethod
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
        return $this->onCall('account.setSilenceMode');
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
     * Time in seconds for what notifications should be disabled. '-1' to disable forever.
     *
     * {"type":"int"}
     */
    public function _time(int $time) : self
    {
        $this->params['time'] = $time;
        return $this;
    }
    /**
     * Destination ID. "For user: 'User ID', e.g. '12345'. For chat: '2000000000' + 'Chat ID', e.g. '2000000001'. For community: '- Community ID', e.g. '-12345'. "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * '1' — to enable sound in this dialog, '0' — to disable sound. Only if 'peer_id' contains user or community ID.
     *
     * {"type":"int"}
     */
    public function _sound(int $sound) : self
    {
        $this->params['sound'] = $sound;
        return $this;
    }
}