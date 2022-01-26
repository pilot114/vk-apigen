<?php

namespace VkApigen\Method\Wall;

/**
 * Returns a list of comments on a post on a user wall or community wall.
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
        return in_array($this->accessTokenType, ['user', 'service']);
    }
    public function call()
    {
        return $this->onCall('wall.getComments');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
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
     * Number of comments to return (maximum 100).
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order: 'asc' — chronological, 'desc' — reverse chronological
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["chronological","reverse chronological"]}
     */
    public function _sort(string $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Number of characters at which to truncate comments when previewed. By default, '90'. Specify '0' if you do not want to truncate comments.
     *
     * {"type":"int","minimum":0}
     */
    public function _preview_length(int $preview_length) : self
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/base_user_group_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _comment_id(int $comment_id) : self
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * Count items in threads.
     *
     * {"type":"int","default":0,"minimum":0,"maximum":10}
     */
    public function _thread_items_count(int $thread_items_count) : self
    {
        $this->params['thread_items_count'] = $thread_items_count;
        return $this;
    }
}