<?php

namespace VkApigen\Method;

/**
 * Gets settings of the user in this application.
 */
class Account_GetAppPermissions extends \VkApigen\BaseMethod
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
        return $this->onCall('account.getAppPermissions');
    }
    /**
     * User ID whose settings information shall be got. By default: current user.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Account_GetAppPermissions
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}