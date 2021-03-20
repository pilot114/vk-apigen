<?php

namespace VkApigen\Method\Apps;

/**
 * Sends a request to another user in an app that uses VK authorization.
 */
class SendRequest extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user']);
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
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * request text
     *
     * {"type":"string"}
     */
    public function _text(string $text) : self
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * request type. Values: 'invite' – if the request is sent to a user who does not have the app installed,, 'request' – if a user has already installed the app
     *
     * {"type":"string","default":"request","enum":["invite","request"]}
     */
    public function _type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":128}
     */
    public function _name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * special string key to be sent with the request
     *
     * {"type":"string"}
     */
    public function _key(string $key) : self
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _separate(bool $separate) : self
    {
        $this->params['separate'] = $separate;
        return $this;
    }
}