<?php

namespace VkApigen\Method;

/**
 * Returns information specifying whether a user is a member of a community.
 */
class Groups_IsMember extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.isMember');
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"string"}
     */
    public function group_id(string $group_id) : Groups_IsMember
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Groups_IsMember
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * User IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : Groups_IsMember
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * '1' — to return an extended response with additional fields. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Groups_IsMember
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}