<?php

namespace VkApigen\Method\Friends;

/**
 * Returns a list of IDs of the current user's friends who installed the application.
 */
class GetAppUsers extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('friends.getAppUsers');
    }
}