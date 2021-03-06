<?php

namespace VkApigen\Method\Friends;

/**
 * Checks the current user's friendship status with other specified users.
 */
class AreFriends extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.areFriends');
    }
    /**
     * IDs of the users whose friendship status to check.
     *
     * {"type":"array","items":{"type":"integer"},"maxItems":1000}
     */
    public function user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * '1' — to return 'sign' field. 'sign' is md5("{id}_{user_id}_{friends_status}_{application_secret}"), where id is current user ID. This field allows to check that data has not been modified by the client. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _need_sign(bool $need_sign) : self
    {
        $this->params['need_sign'] = $need_sign;
        return $this;
    }
    /**
     * Return friend request read_state field
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}