<?php

namespace VkApigen\Method\Auth;

/**
 * Completes a user's registration (begun with the [vk.com/dev/auth.signup|auth.signup] method) using an authorization code.
 */
class Confirm extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('auth.confirm');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function client_id(int $client_id) : self
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function client_secret(string $client_secret) : self
    {
        $this->params['client_secret'] = $client_secret;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : self
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function code(string $code) : self
    {
        $this->params['code'] = $code;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _password(string $password) : self
    {
        $this->params['password'] = $password;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _test_mode(bool $test_mode) : self
    {
        $this->params['test_mode'] = $test_mode;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _intro(int $intro) : self
    {
        $this->params['intro'] = $intro;
        return $this;
    }
}