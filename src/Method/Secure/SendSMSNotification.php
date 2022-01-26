<?php

namespace VkApigen\Method\Secure;

/**
 * Sends 'SMS' notification to a user's mobile device.
 */
class SendSMSNotification extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.sendSMSNotification');
    }
    /**
     * ID of the user to whom SMS notification is sent. The user shall allow the application to send him/her notifications (, +1).
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * 'SMS' text to be sent in 'UTF-8' encoding. Only Latin letters and numbers are allowed. Maximum size is '160' characters.
     *
     * {"type":"string"}
     */
    public function message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
}