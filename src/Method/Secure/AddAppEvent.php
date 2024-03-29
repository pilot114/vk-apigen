<?php

namespace VkApigen\Method\Secure;

/**
 * Adds user activity information to an application
 */
class AddAppEvent extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['service']);
    }
    public function call()
    {
        return $this->onCall('secure.addAppEvent');
    }
    /**
     * ID of a user to save the data
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * there are 2 default activities: , * 1 - level. Works similar to ,, * 2 - points, saves points amount, Any other value is for saving completed missions
     *
     * {"type":"int","minimum":0}
     */
    public function activity_id(int $activity_id) : self
    {
        $this->params['activity_id'] = $activity_id;
        return $this;
    }
    /**
     * depends on activity_id: * 1 - number, current level number,, * 2 - number, current user's points amount, , Any other value is ignored
     *
     * {"type":"int","minimum":0}
     */
    public function _value(int $value) : self
    {
        $this->params['value'] = $value;
        return $this;
    }
}