<?php

namespace VkApigen\Method\Groups;

/**
 * Allows to add, remove or edit the community manager.
 */
class EditManager extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.editManager');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Manager role. Possible values: *'moderator',, *'editor',, *'administrator',, *'advertiser'.
     *
     * {"type":"string","$ref":"objects.json#\/definitions\/groups_group_role"}
     */
    public function _role(string $role) : self
    {
        $this->params['role'] = $role;
        return $this;
    }
    /**
     * '1' — to show the manager in Contacts block of the community.
     *
     * {"type":"bool"}
     */
    public function _is_contact(bool $is_contact) : self
    {
        $this->params['is_contact'] = $is_contact;
        return $this;
    }
    /**
     * Position to show in Contacts block.
     *
     * {"type":"string"}
     */
    public function _contact_position(string $contact_position) : self
    {
        $this->params['contact_position'] = $contact_position;
        return $this;
    }
    /**
     * Contact phone.
     *
     * {"type":"string"}
     */
    public function _contact_phone(string $contact_phone) : self
    {
        $this->params['contact_phone'] = $contact_phone;
        return $this;
    }
    /**
     * Contact e-mail.
     *
     * {"type":"string"}
     */
    public function _contact_email(string $contact_email) : self
    {
        $this->params['contact_email'] = $contact_email;
        return $this;
    }
}