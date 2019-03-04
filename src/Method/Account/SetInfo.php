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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.setInfo');
    }
    /**
     * Setting name.
     *
     * {"type":"string"}
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