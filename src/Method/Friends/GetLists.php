<?php

namespace VkApigen\Method\Friends;

/**
 * Returns a list of the user's friend lists.
 */
class GetLists extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getLists');
    }
    /**
     * User ID.
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * '1' — to return system friend lists. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _return_system(bool $return_system) : self
    {
        $this->params['return_system'] = $return_system;
        return $this;
    }
}