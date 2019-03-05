<?php

namespace VkApigen\Method\Secure;

/**
 * Sets user game level in the application which can be seen by his/her friends.
 */
class SetUserLevel extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.setUserLevel');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _levels(array $levels) : self
    {
        $this->params['levels'] = $levels;
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
     * level value.
     *
     * {"type":"int","minimum":0}
     */
    public function _level(int $level) : self
    {
        $this->params['level'] = $level;
        return $this;
    }
}