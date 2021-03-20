<?php

namespace VkApigen\Method\Fave;

/**
 * Нет описания
 */
class AddTag extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.addTag');
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":50}
     */
    public function _name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"back","enum":["back","front"]}
     */
    public function _position(string $position) : self
    {
        $this->params['position'] = $position;
        return $this;
    }
}