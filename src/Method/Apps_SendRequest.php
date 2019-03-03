<?php

namespace VkApigen\Method;

/**
 * Sends a request to another user in an app that uses VK authorization.
 */
class Apps_SendRequest extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.sendRequest');
    }
    /**
     * id of the user to send a request
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Apps_SendRequest
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * request text
     *
     * {"type":"string"}
     */
    public function _text(string $text) : Apps_SendRequest
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * request type. Values: 'invite' – if the request is sent to a user who does not have the app installed,, 'request' – if a user has already installed the app
     *
     * {"type":"string","default":0,"enum":["request","invite"]}
     */
    public function _type(string $type) : Apps_SendRequest
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string","maxLength":128}
     */
    public function _name(string $name) : Apps_SendRequest
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * special string key to be sent with the request
     *
     * {"type":"string"}
     */
    public function _key(string $key) : Apps_SendRequest
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _separate(bool $separate) : Apps_SendRequest
    {
        $this->params['separate'] = $separate;
        return $this;
    }
}