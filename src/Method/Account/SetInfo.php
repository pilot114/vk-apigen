<?php

namespace VkApigen\Method\Account;

/**
 * Allows to edit the current account info.
 */
class SetInfo extends \VkApigen\BaseMethod
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
        return $this->onCall('account.setInfo');
    }
    /**
     * Setting name.
     *
     * {"type":"string","enum":["intro","no_wall_replies","own_posts_default"]}
     */
    public function _name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Setting value.
     *
     * {"type":"string"}
     */
    public function _value(string $value) : self
    {
        $this->params['value'] = $value;
        return $this;
    }
}