<?php

namespace VkApigen\Method\Friends;

/**
 * Deletes a friend list of the current user.
 */
class DeleteList extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.deleteList');
    }
    /**
     * ID of the friend list to delete.
     *
     * {"type":"int","minimum":0,"maximum":24}
     */
    public function list_id(int $list_id) : self
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
}