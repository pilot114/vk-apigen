<?php

namespace VkApigen\Method;

/**
 * Adds user activity information to an application
 */
class Secure_AddAppEvent extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.addAppEvent');
    }
    /**
     * ID of a user to save the data
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Secure_AddAppEvent
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * there are 2 default activities: , * 1 – level. Works similar to ,, * 2 – points, saves points amount, Any other value is for saving completed missions
     *
     * {"type":"int","minimum":0}
     */
    public function activity_id(int $activity_id) : Secure_AddAppEvent
    {
        $this->params['activity_id'] = $activity_id;
        return $this;
    }
    /**
     * depends on activity_id: * 1 – number, current level number,, * 2 – number, current user's points amount, , Any other value is ignored
     *
     * {"type":"int","minimum":0,"maximum":10000}
     */
    public function _value(int $value) : Secure_AddAppEvent
    {
        $this->params['value'] = $value;
        return $this;
    }
}