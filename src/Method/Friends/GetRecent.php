<?php

namespace VkApigen\Method\Friends;

/**
 * Returns a list of user IDs of the current user's recently added friends.
 */
class GetRecent extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getRecent');
    }
    /**
     * Number of recently added friends to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}