<?php

namespace VkApigen\Method;

/**
 * Checks the user authentication in 'IFrame' and 'Flash' apps using the 'access_token' parameter.
 */
class Secure_CheckToken extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.checkToken');
    }
    /**
     * client 'access_token'
     *
     * {"type":"string"}
     */
    public function _token(string $token) : Secure_CheckToken
    {
        $this->params['token'] = $token;
        return $this;
    }
    /**
     * user 'ip address'. Note that user may access using the 'ipv6' address, in this case it is required to transmit the 'ipv6' address. If not transmitted, the address will not be checked.
     *
     * {"type":"string"}
     */
    public function _ip(string $ip) : Secure_CheckToken
    {
        $this->params['ip'] = $ip;
        return $this;
    }
}