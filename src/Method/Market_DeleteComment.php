<?php

namespace VkApigen\Method;

/**
 * Deletes an item's comment
 */
class Market_DeleteComment extends \VkApigen\BaseMethod
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
        return $this->onCall('market.deleteComment');
    }
    /**
     * identifier of an item owner community, "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_DeleteComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * comment id
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : Market_DeleteComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}