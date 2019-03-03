<?php

namespace VkApigen\Method;

/**
 * Sends 'SMS' notification to a user's mobile device.
 */
class Secure_SendSMSNotification extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.sendSMSNotification');
    }
    /**
     * ID of the user to whom SMS notification is sent. The user shall allow the application to send him/her notifications (, +1).
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Secure_SendSMSNotification
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * 'SMS' text to be sent in 'UTF-8' encoding. Only Latin letters and numbers are allowed. Maximum size is '160' characters.
     *
     * {"type":"string"}
     */
    public function message(string $message) : Secure_SendSMSNotification
    {
        $this->params['message'] = $message;
        return $this;
    }
}