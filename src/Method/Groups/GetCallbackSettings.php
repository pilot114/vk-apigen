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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('groups.getCallbackSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
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