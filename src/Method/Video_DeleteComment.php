<?php

namespace VkApigen\Method;

/**
 * Deletes a comment on a video.
 */
class Video_DeleteComment extends \VkApigen\BaseMethod
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
        return $this->onCall('video.deleteComment');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_DeleteComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the comment to be deleted.
     *
     * {"type":"int"}
     */
    public function comment_id(int $comment_id) : Video_DeleteComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}