<?php

namespace VkApigen\Method;

/**
 * Adds a video to a user or community page.
 */
class Video_Add extends \VkApigen\BaseMethod
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
        return $this->onCall('video.add');
    }
    /**
     * identifier of a user or community to add a video to. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _target_id(int $target_id) : Video_Add
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_Add
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Video_Add
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}