<?php

namespace VkApigen\Method;

/**
 * Allows to add, remove or edit the community manager.
 */
class Groups_EditManager extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.editManager');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_EditManager
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Groups_EditManager
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Manager role. Possible values: *'moderator',, *'editor',, *'administrator'.
     *
     * {"type":"string","enum":["moderator","editor","administrator"]}
     */
    public function _role(string $role) : Groups_EditManager
    {
        $this->params['role'] = $role;
        return $this;
    }
    /**
     * '1' — to show the manager in Contacts block of the community.
     *
     * {"type":"bool"}
     */
    public function _is_contact(bool $is_contact) : Groups_EditManager
    {
        $this->params['is_contact'] = $is_contact;
        return $this;
    }
    /**
     * Position to show in Contacts block.
     *
     * {"type":"string"}
     */
    public function _contact_position(string $contact_position) : Groups_EditManager
    {
        $this->params['contact_position'] = $contact_position;
        return $this;
    }
    /**
     * Contact phone.
     *
     * {"type":"string"}
     */
    public function _contact_phone(string $contact_phone) : Groups_EditManager
    {
        $this->params['contact_phone'] = $contact_phone;
        return $this;
    }
    /**
     * Contact e-mail.
     *
     * {"type":"string"}
     */
    public function _contact_email(string $contact_email) : Groups_EditManager
    {
        $this->params['contact_email'] = $contact_email;
        return $this;
    }
}