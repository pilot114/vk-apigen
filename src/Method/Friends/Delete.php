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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('friends.delete');
    }
    /**
     * ID of the user whose friend request is to be declined or who is to be deleted from the current user's friend list.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}