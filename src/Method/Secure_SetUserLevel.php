<?php

namespace VkApigen\Method;

/**
 * Sets user game level in the application which can be seen by his/her friends.
 */
class Secure_SetUserLevel extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.setUserLevel');
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _levels(array $levels) : Secure_SetUserLevel
    {
        $this->params['levels'] = $levels;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Secure_SetUserLevel
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * level value.
     *
     * {"type":"int","minimum":0}
     */
    public function _level(int $level) : Secure_SetUserLevel
    {
        $this->params['level'] = $level;
        return $this;
    }
}