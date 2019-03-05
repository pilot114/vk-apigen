<?php

namespace VkApigen\Method\Friends;

/**
 * Returns a list of user IDs of the mutual friends of two users.
 */
class GetMutual extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getMutual');
    }
    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'target_uid'.
     *
     * {"type":"int","minimum":0}
     */
    public function _source_uid(int $source_uid) : self
    {
        $this->params['source_uid'] = $source_uid;
        return $this;
    }
    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * {"type":"int","minimum":0}
     */
    public function _target_uid(int $target_uid) : self
    {
        $this->params['target_uid'] = $target_uid;
        return $this;
    }
    /**
     * IDs of the users whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _target_uids(array $target_uids) : self
    {
        $this->params['target_uids'] = $target_uids;
        return $this;
    }
    /**
     * Sort order: 'random' — random order
     *
     * {"type":"string"}
     */
    public function _order(string $order) : self
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * Number of mutual friends to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of mutual friends.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}