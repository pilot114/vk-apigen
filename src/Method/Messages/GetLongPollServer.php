<?php

namespace VkApigen\Method\Messages;

/**
 * Returns data required for connection to a Long Poll server.
 */
class GetLongPollServer extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getLongPollServer');
    }
    /**
     * '1' — to return the 'pts' field, needed for the [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"bool"}
     */
    public function _need_pts(bool $need_pts) : self
    {
        $this->params['need_pts'] = $need_pts;
        return $this;
    }
    /**
     * Group ID (for group messages with user access token)
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Long poll version
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _lp_version(int $lp_version) : self
    {
        $this->params['lp_version'] = $lp_version;
        return $this;
    }
}