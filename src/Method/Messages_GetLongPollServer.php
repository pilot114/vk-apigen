<?php

namespace VkApigen\Method;

/**
 * Returns data required for connection to a Long Poll server.
 */
class Messages_GetLongPollServer extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getLongPollServer');
    }
    /**
     * Long poll version
     *
     * {"type":"int"}
     */
    public function _lp_version(int $lp_version) : Messages_GetLongPollServer
    {
        $this->params['lp_version'] = $lp_version;
        return $this;
    }
    /**
     * '1' — to return the 'pts' field, needed for the [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"bool"}
     */
    public function _need_pts(bool $need_pts) : Messages_GetLongPollServer
    {
        $this->params['need_pts'] = $need_pts;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Messages_GetLongPollServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}