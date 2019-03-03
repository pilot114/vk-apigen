<?php

namespace VkApigen\Method;

/**
 * Returns a value of variable with the name set by key parameter.
 */
class Storage_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('storage.get');
    }
    /**
     * not description
     *
     * {"type":"string","maxLength":100}
     */
    public function _key(string $key) : Storage_Get
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"},"maxItems":1000}
     */
    public function _keys(array $keys) : Storage_Get
    {
        $this->params['keys'] = $keys;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Storage_Get
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}