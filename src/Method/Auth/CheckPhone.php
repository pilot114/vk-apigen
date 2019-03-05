<?php

namespace VkApigen\Method\Auth;

/**
 * Checks a user's phone number for correctness.
 */
class CheckPhone extends \VkApigen\BaseMethod
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
        return $this->onCall('auth.checkPhone');
    }
    /**
     * Phone number.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : self
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : self
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
     * {"type":"bool"}
     */
    public function _auth_by_phone(bool $auth_by_phone) : self
    {
        $this->params['auth_by_phone'] = $auth_by_phone;
        return $this;
    }
}