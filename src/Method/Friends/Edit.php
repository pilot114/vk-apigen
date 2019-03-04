<?php

namespace VkApigen\Method\Friends;

/**
 * Edits the friend lists of the selected user.
 */
class Edit extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('friends.edit');
    }
    /**
     * ID of the user whose friend list is to be edited.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * IDs of the friend lists to which to add the user.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _list_ids(array $list_ids) : self
    {
        $this->params['list_ids'] = $list_ids;
        return $this;
    }
}