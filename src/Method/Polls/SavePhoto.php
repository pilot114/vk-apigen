<?php

namespace VkApigen\Method\Polls;

/**
 * Нет описания
 */
class SavePhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('polls.savePhoto');
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : self
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function hash(string $hash) : self
    {
        $this->params['hash'] = $hash;
        return $this;
    }
}