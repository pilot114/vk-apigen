<?php

namespace VkApigen\Method;

/**
 * Returns information whether a user installed the application.
 */
class Users_IsAppUser extends \VkApigen\BaseMethod
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
        return $this->onCall('users.isAppUser');
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _user_id(int $user_id) : Users_IsAppUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}