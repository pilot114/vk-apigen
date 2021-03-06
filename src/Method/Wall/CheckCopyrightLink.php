<?php

namespace VkApigen\Method\Wall;

/**
 * Нет описания
 */
class CheckCopyrightLink extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.checkCopyrightLink');
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function link(string $link) : self
    {
        $this->params['link'] = $link;
        return $this;
    }
}