<?php

namespace VkApigen\Method\Notifications;

/**
 * Resets the counter of new notifications about other users' feedback to the current user's wall posts.
 */
class MarkAsViewed extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('notifications.markAsViewed');
    }
}