<?php

namespace VkApigen\Method;

/**
 * Returns a list of comments on a video.
 */
class Video_GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('video.getComments');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_GetComments
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field
     *
     * {"type":"bool"}
     */
    public function _need_likes(bool $need_likes) : Video_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _start_comment_id(int $start_comment_id) : Video_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Video_GetComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : Video_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order: 'asc' — oldest comment first, 'desc' — newest comment first
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["oldest comment first","newest comment first"]}
     */
    public function _sort(string $sort) : Video_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Video_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}