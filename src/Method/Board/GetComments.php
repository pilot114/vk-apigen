<?php

namespace VkApigen\Method\Board;

/**
 * Returns a list of comments on a topic on a community's discussion board.
 */
class GetComments extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
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
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"int","minimum":0}
     */
    public function topic_id(int $topic_id) : self
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * '1' — to return the 'likes' field, '0' — not to return the 'likes' field (default)
     *
     * {"type":"bool"}
     */
    public function _need_likes(bool $need_likes) : self
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _start_comment_id(int $start_comment_id) : self
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return information about users who posted comments, '0' — to return no additional fields (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Sort order: 'asc' — by creation date in chronological order, 'desc' — by creation date in reverse chronological order,
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["chronological","reverse chronological"]}
     */
    public function _sort(string $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
}