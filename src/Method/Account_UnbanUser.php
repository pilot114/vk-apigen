<?php

namespace VkApigen\Method;

/**
 * Deletes user from the blacklist.
 */
class Account_UnbanUser extends \VkApigen\BaseMethod
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
        return $this->onCall('account.unbanUser');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Account_UnbanUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}