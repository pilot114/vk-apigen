<?php

namespace VkApigen\Method\Storage;

/**
 * Returns a value of variable with the name set by key parameter.
 */
class Get extends \VkApigen\BaseMethod
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
        return $this->onCall('storage.get');
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":100}
     */
    public function _key(string $key) : self
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"},"maxItems":1000}
     */
    public function _keys(array $keys) : self
    {
        $this->params['keys'] = $keys;
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