<?php

namespace VkApigen\Method\Secure;

/**
 * Sends notification to the user.
 */
class SendNotification extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.sendNotification');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","format":"int64","entity":"owner","minimum":1}}
     */
    public function _user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * notification text which should be sent in 'UTF-8' encoding ('254' characters maximum).
     *
     * {"type":"string"}
     */
    public function message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
}