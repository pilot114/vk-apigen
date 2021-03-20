<?php

namespace VkApigen\Method\Apps;

/**
 * Returns scopes for auth
 */
class GetScopes extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getScopes');
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"user","enum":["group","user"]}
     */
    public function _type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
}