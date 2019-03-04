<?php

namespace VkApigen\Method\Wall;

/**
 * Restores a comment deleted from a user wall or community wall.
 */
class RestoreComment extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('wall.restoreComment');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int"}
     */
    public function comment_id(int $comment_id) : self
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}