<?php

namespace VkApigen\Method;

/**
 * Removes a profile from user faves.
 */
class Fave_RemoveUser extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.removeUser');
    }
    /**
     * Profile ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Fave_RemoveUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}