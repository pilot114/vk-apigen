<?php

namespace VkApigen\Method;

/**
 * Returns a list of wall posts that the current user has liked.
 */
class Fave_GetPosts extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.getPosts');
    }
    /**
     * Offset needed to return a specific subset of posts.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Fave_GetPosts
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of posts to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : Fave_GetPosts
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return additional 'wall', 'profiles', and 'groups' fields. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Fave_GetPosts
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}