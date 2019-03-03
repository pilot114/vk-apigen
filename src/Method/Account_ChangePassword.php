<?php

namespace VkApigen\Method;

/**
 * Changes a user password after access is successfully restored with the [vk.com/dev/auth.restore|auth.restore] method.
 */
class Account_ChangePassword extends \VkApigen\BaseMethod
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
        return $this->onCall('account.changePassword');
    }
    /**
     * Session id received after the [vk.com/dev/auth.restore|auth.restore] method is executed. (If the password is changed right after the access was restored)
     *
     * {"type":"string"}
     */
    public function _restore_sid(string $restore_sid) : Account_ChangePassword
    {
        $this->params['restore_sid'] = $restore_sid;
        return $this;
    }
    /**
     * Hash received after a successful OAuth authorization with a code got by SMS. (If the password is changed right after the access was restored)
     *
     * {"type":"string"}
     */
    public function _change_password_hash(string $change_password_hash) : Account_ChangePassword
    {
        $this->params['change_password_hash'] = $change_password_hash;
        return $this;
    }
    /**
     * Current user password.
     *
     * {"type":"string"}
     */
    public function _old_password(string $old_password) : Account_ChangePassword
    {
        $this->params['old_password'] = $old_password;
        return $this;
    }
    /**
     * New password that will be set as a current
     *
     * {"type":"string","minLength":6}
     */
    public function new_password(string $new_password) : Account_ChangePassword
    {
        $this->params['new_password'] = $new_password;
        return $this;
    }
}