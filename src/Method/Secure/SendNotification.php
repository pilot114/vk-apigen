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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('secure.sendNotification');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
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