<?php

namespace VkApigen\Method\Notifications;

/**
 * Нет описания
 */
class SendMessage extends \VkApigen\BaseMethod
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
        return $this->onCall('notifications.sendMessage');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"minItems":1,"maxItems":100}
     */
    public function user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":254}
     */
    public function message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":2047}
     */
    public function _fragment(string $fragment) : self
    {
        $this->params['fragment'] = $fragment;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _random_id(int $random_id) : self
    {
        $this->params['random_id'] = $random_id;
        return $this;
    }
}