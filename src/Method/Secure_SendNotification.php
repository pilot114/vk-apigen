<?php

namespace VkApigen\Method;

/**
 * Sends notification to the user.
 */
class Secure_SendNotification extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.sendNotification');
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : Secure_SendNotification
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Secure_SendNotification
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * notification text which should be sent in 'UTF-8' encoding ('254' characters maximum).
     *
     * {"type":"string"}
     */
    public function message(string $message) : Secure_SendNotification
    {
        $this->params['message'] = $message;
        return $this;
    }
}