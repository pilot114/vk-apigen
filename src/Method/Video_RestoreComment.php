<?php

namespace VkApigen\Method;

/**
 * Restores a previously deleted comment on a video.
 */
class Video_RestoreComment extends \VkApigen\BaseMethod
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
        return $this->onCall('video.restoreComment');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_RestoreComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the deleted comment.
     *
     * {"type":"int"}
     */
    public function comment_id(int $comment_id) : Video_RestoreComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}