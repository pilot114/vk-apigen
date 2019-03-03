<?php

namespace VkApigen\Method;

/**
 * Completes a user's registration (begun with the [vk.com/dev/auth.signup|auth.signup] method) using an authorization code.
 */
class Auth_Confirm extends \VkApigen\BaseMethod
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
        return $this->onCall('auth.confirm');
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function client_id(int $client_id) : Auth_Confirm
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function client_secret(string $client_secret) : Auth_Confirm
    {
        $this->params['client_secret'] = $client_secret;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : Auth_Confirm
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function code(string $code) : Auth_Confirm
    {
        $this->params['code'] = $code;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _password(string $password) : Auth_Confirm
    {
        $this->params['password'] = $password;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _test_mode(bool $test_mode) : Auth_Confirm
    {
        $this->params['test_mode'] = $test_mode;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _intro(int $intro) : Auth_Confirm
    {
        $this->params['intro'] = $intro;
        return $this;
    }
}