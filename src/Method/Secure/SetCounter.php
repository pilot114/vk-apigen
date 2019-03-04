<?php

namespace VkApigen\Method\Secure;

/**
 * Sets a counter which is shown to the user in bold in the left menu.
 */
class SetCounter extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('secure.setCounter');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _counters(array $counters) : self
    {
        $this->params['counters'] = $counters;
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
     * counter value.
     *
     * {"type":"int"}
     */
    public function _counter(int $counter) : self
    {
        $this->params['counter'] = $counter;
        return $this;
    }
}