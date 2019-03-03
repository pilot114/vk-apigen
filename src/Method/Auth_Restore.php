<?php

namespace VkApigen\Method;

/**
 * Allows to restore account access using a code received via SMS. " This method is only available for apps with [vk.com/dev/auth_direct|Direct authorization] access. "
 */
class Auth_Restore extends \VkApigen\BaseMethod
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
        return $this->onCall('auth.restore');
    }
    /**
     * User phone number.
     *
     * {"type":"string"}
     */
    public function phone(string $phone) : Auth_Restore
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * User last name.
     *
     * {"type":"string"}
     */
    public function last_name(string $last_name) : Auth_Restore
    {
        $this->params['last_name'] = $last_name;
        return $this;
    }
}