<?php

namespace VkApigen\Method\Groups;

/**
 * Returns [vk.com/dev/callback_api|Callback API] notifications settings.
 */
class GetCallbackSettings extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('groups.getCallbackSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Server ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _server_id(int $server_id) : self
    {
        $this->params['server_id'] = $server_id;
        return $this;
    }
}