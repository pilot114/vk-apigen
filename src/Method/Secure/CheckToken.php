<?php

namespace VkApigen\Method\Secure;

/**
 * Checks the user authentication in 'IFrame' and 'Flash' apps using the 'access_token' parameter.
 */
class CheckToken extends \VkApigen\BaseMethod
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
        return $this->onCall('secure.checkToken');
    }
    /**
     * client 'access_token'
     *
     * {"type":"string"}
     */
    public function _token(string $token) : self
    {
        $this->params['token'] = $token;
        return $this;
    }
    /**
     * user 'ip address'. Note that user may access using the 'ipv6' address, in this case it is required to transmit the 'ipv6' address. If not transmitted, the address will not be checked.
     *
     * {"type":"string"}
     */
    public function _ip(string $ip) : self
    {
        $this->params['ip'] = $ip;
        return $this;
    }
}