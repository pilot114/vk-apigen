<?php

namespace VkApigen\Method;

/**
 * Returns [vk.com/dev/callback_api|Callback API] notifications settings.
 */
class Groups_GetCallbackSettings extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.getCallbackSettings');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_GetCallbackSettings
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Server ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _server_id(int $server_id) : Groups_GetCallbackSettings
    {
        $this->params['server_id'] = $server_id;
        return $this;
    }
}