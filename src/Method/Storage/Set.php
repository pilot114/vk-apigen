<?php

namespace VkApigen\Method\Storage;

/**
 * Saves a value of variable with the name set by 'key' parameter.
 */
class Set extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group', 'service']);
    }
    public function call()
    {
        return $this->onCall('storage.set');
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":100}
     */
    public function key(string $key) : self
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _value(string $value) : self
    {
        $this->params['value'] = $value;
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
}