<?php

namespace VkApigen\Method;

/**
 * Sets a counter which is shown to the user in bold in the left menu.
 */
class Secure_SetCounter extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.setCounter');
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _counters(array $counters) : Secure_SetCounter
    {
        $this->params['counters'] = $counters;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Secure_SetCounter
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * counter value.
     *
     * {"type":"int"}
     */
    public function _counter(int $counter) : Secure_SetCounter
    {
        $this->params['counter'] = $counter;
        return $this;
    }
}