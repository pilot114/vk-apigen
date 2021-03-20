<?php

namespace VkApigen\Method\Friends;

/**
 * Approves or creates a friend request.
 */
class Add extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.add');
    }
    /**
     * ID of the user whose friend request will be approved or to whom a friend request will be sent.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Text of the message (up to 500 characters) for the friend request, if any.
     *
     * {"type":"string"}
     */
    public function _text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * '1' to pass an incoming request to followers list.
     *
     * {"type":"bool"}
     */
    public function _follow(bool $follow) : self
    {
        $this->params['follow'] = $follow;
        return $this;
    }
}