<?php

namespace VkApigen\Method;

/**
 * Restores a comment deleted from a user wall or community wall.
 */
class Wall_RestoreComment extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.restoreComment');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_RestoreComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int"}
     */
    public function comment_id(int $comment_id) : Wall_RestoreComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}