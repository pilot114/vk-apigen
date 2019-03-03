<?php

namespace VkApigen\Method;

/**
 * Edits a friend list of the current user.
 */
class Friends_EditList extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.editList');
    }
    /**
     * Name of the friend list.
     *
     * {"type":"string"}
     */
    public function _name(string $name) : Friends_EditList
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Friend list ID.
     *
     * {"type":"int","minimum":0}
     */
    public function list_id(int $list_id) : Friends_EditList
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
    /**
     * IDs of users in the friend list.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _user_ids(array $user_ids) : Friends_EditList
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * (Applies if 'user_ids' parameter is not set.), User IDs to add to the friend list.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _add_user_ids(array $add_user_ids) : Friends_EditList
    {
        $this->params['add_user_ids'] = $add_user_ids;
        return $this;
    }
    /**
     * (Applies if 'user_ids' parameter is not set.), User IDs to delete from the friend list.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _delete_user_ids(array $delete_user_ids) : Friends_EditList
    {
        $this->params['delete_user_ids'] = $delete_user_ids;
        return $this;
    }
}