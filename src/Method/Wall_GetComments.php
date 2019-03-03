<?php

namespace VkApigen\Method;

/**
 * Returns a list of comments on a post on a user wall or community wall.
 */
class Wall_GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.getComments');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : Wall_GetComments
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * '1' — to return the 'likes' field, '0' — not to return the 'likes' field (default)
     *
     * {"type":"bool"}
     */
    public function _need_likes(bool $need_likes) : Wall_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _start_comment_id(int $start_comment_id) : Wall_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Wall_GetComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return (maximum 100).
     *
     * {"type":"int","minimum":0,"maximum":100}
     */
    public function _count(int $count) : Wall_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order: 'asc' — chronological, 'desc' — reverse chronological
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["chronological","reverse chronological"]}
     */
    public function _sort(string $sort) : Wall_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Number of characters at which to truncate comments when previewed. By default, '90'. Specify '0' if you do not want to truncate comments.
     *
     * {"type":"int","minimum":0,"default":90}
     */
    public function _preview_length(int $preview_length) : Wall_GetComments
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Wall_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}