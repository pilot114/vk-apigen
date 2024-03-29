<?php

namespace VkApigen\Method\Account;

/**
 * Sets an application screen name (up to 17 characters), that is shown to the user in the left menu.
 */
class SetNameInMenu extends \VkApigen\BaseMethod
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
        return $this->onCall('account.setNameInMenu');
    }
    /**
     * User ID.
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Application screen name.
     *
     * {"type":"string"}
     */
    public function _name(string $name) : self
    {
        $this->params['name'] = $name;
        return $this;
    }
}