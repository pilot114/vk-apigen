<?php

namespace VkApigen\Method\Friends;

/**
 * Declines a friend request or deletes a user from the current user's friend list.
 */
class Delete extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.delete');
    }
    /**
     * ID of the user whose friend request is to be declined or who is to be deleted from the current user's friend list.
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}