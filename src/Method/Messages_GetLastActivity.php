<?php

namespace VkApigen\Method;

/**
 * Returns a user's current status and date of last activity.
 */
class Messages_GetLastActivity extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getLastActivity');
    }
    /**
     * User ID.
     *
     * {"type":"int"}
     */
    public function user_id(int $user_id) : Messages_GetLastActivity
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}