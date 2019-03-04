<?php

namespace VkApigen\Method\Friends;

/**
 * Marks all incoming friend requests as viewed.
 */
class DeleteAllRequests extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('friends.deleteAllRequests');
    }
}