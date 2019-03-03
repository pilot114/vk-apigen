<?php

namespace VkApigen\Method;

/**
 * Marks all incoming friend requests as viewed.
 */
class Friends_DeleteAllRequests extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.deleteAllRequests');
    }
}