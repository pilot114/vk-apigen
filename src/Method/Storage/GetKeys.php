<?php

namespace VkApigen\Method\Storage;

/**
 * Returns the names of all variables.
 */
class GetKeys extends \VkApigen\BaseMethod
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
        return $this->onCall('storage.getKeys');
    }
    /**
     * user id, whose variables names are returned if they were requested with a server method.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * amount of variable names the info needs to be collected from.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}