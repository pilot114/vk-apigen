<?php

namespace VkApigen\Method;

/**
 * Removes a tag from a video.
 */
class Video_RemoveTag extends \VkApigen\BaseMethod
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
        return $this->onCall('video.removeTag');
    }
    /**
     * Tag ID.
     *
     * {"type":"int"}
     */
    public function tag_id(int $tag_id) : Video_RemoveTag
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : Video_RemoveTag
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_RemoveTag
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}