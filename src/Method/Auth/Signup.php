<?php

namespace VkApigen\Method\Auth;

/**
 * Registers a new user by phone number.
 */
class Signup extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['open', 'service']);
    }
    public function call()
    {
        return $this->onCall('auth.signup');
    }
    /**
     * User's first name.
     *
     * {"type":"string"}
     */
    public function first_name(string $first_name) : self
    {
        $this->params['first_name'] = $first_name;
        return $this;
    }
    /**
     * User's surname.
     *
     * {"type":"string"}
     */
    public function last_name(string $last_name) : self
    {
        $this->params['last_name'] = $last_name;
        return $this;
    }
    /**
     * User's birthday.
     *
     * {"type":"string"}
     */
    public function birthday(string $birthday) : self
    {
        $this->params['birthday'] = $birthday;
        return $this;
    }
    /**
     * Your application ID.
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
     * User's phone number. Can be pre-checked with the [vk.com/dev/auth.checkPhone|auth.checkPhone] method.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : self
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * User's password (minimum of 6 characters). Can be specified later with the [vk.com/dev/auth.confirm|auth.confirm] method.
     *
     * {"type":"string"}
     */
    public function _password(string $password) : self
    {
        $this->params['password'] = $password;
        return $this;
    }
    /**
     * '1' — test mode, in which the user will not be registered and the phone number will not be checked for availability, '0' — default mode (default)
     *
     * {"type":"bool"}
     */
    public function _test_mode(bool $test_mode) : self
    {
        $this->params['test_mode'] = $test_mode;
        return $this;
    }
    /**
     * '1' — call the phone number and leave a voice message of the authorization code, '0' — send the code by SMS (default)
     *
     * {"type":"bool"}
     */
    public function _voice(bool $voice) : self
    {
        $this->params['voice'] = $voice;
        return $this;
    }
    /**
     * '1' — female, '2' — male
     *
     * {"type":"int","minimum":0,"enum":[0,1,2],"enumNames":["undefined","female","male"]}
     */
    public function _sex(int $sex) : self
    {
        $this->params['sex'] = $sex;
        return $this;
    }
    /**
     * Session ID required for method recall when SMS was not delivered.
     *
     * {"type":"string"}
     */
    public function _sid(string $sid) : self
    {
        $this->params['sid'] = $sid;
        return $this;
    }
}