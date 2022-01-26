<?php

namespace VkApigen\Method\Auth;

/**
 * Allows to restore account access using a code received via SMS. " This method is only available for apps with [vk.com/dev/auth_direct|Direct authorization] access. "
 */
class Restore extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('auth.restore');
    }
    /**
     * User phone number.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : self
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * User last name.
     *
     * {"type":"string"}
     */
    public function last_name(string $last_name) : self
    {
        $this->params['last_name'] = $last_name;
        return $this;
    }
}