<?php

namespace VkApigen\Method;

/**
 * Returns a list of comments on a topic on a community's discussion board.
 */
class Board_GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('board.getComments');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Board_GetComments
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"int","minimum":0}
     */
    public function topic_id(int $topic_id) : Board_GetComments
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * '1' — to return the 'likes' field, '0' — not to return the 'likes' field (default)
     *
     * {"type":"bool"}
     */
    public function _need_likes(bool $need_likes) : Board_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _start_comment_id(int $start_comment_id) : Board_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Board_GetComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : Board_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return information about users who posted comments, '0' — to return no additional fields (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Board_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Sort order: 'asc' — by creation date in chronological order, 'desc' — by creation date in reverse chronological order,
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["chronological","reverse chronological"]}
     */
    public function _sort(string $sort) : Board_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
}