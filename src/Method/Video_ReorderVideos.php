<?php

namespace VkApigen\Method;

/**
 * Reorders the video in the video album.
 */
class Video_ReorderVideos extends \VkApigen\BaseMethod
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
        return $this->onCall('video.reorderVideos');
    }
    /**
     * ID of the user or community that owns the album with videos.
     *
     * {"type":"int"}
     */
    public function _target_id(int $target_id) : Video_ReorderVideos
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * ID of the video album.
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : Video_ReorderVideos
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Video_ReorderVideos
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the video.
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_ReorderVideos
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video before which the video in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _before_owner_id(int $before_owner_id) : Video_ReorderVideos
    {
        $this->params['before_owner_id'] = $before_owner_id;
        return $this;
    }
    /**
     * ID of the video before which the video in question shall be placed.
     *
     * {"type":"int","minimum":0}
     */
    public function _before_video_id(int $before_video_id) : Video_ReorderVideos
    {
        $this->params['before_video_id'] = $before_video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video after which the photo in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _after_owner_id(int $after_owner_id) : Video_ReorderVideos
    {
        $this->params['after_owner_id'] = $after_owner_id;
        return $this;
    }
    /**
     * ID of the video after which the photo in question shall be placed.
     *
     * {"type":"int","minimum":0}
     */
    public function _after_video_id(int $after_video_id) : Video_ReorderVideos
    {
        $this->params['after_video_id'] = $after_video_id;
        return $this;
    }
}