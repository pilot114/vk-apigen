<?php

namespace VkApigen\Method;

/**
 * Resets the counter of new notifications about other users' feedback to the current user's wall posts.
 */
class Notifications_MarkAsViewed extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('notifications.markAsViewed');
    }
}