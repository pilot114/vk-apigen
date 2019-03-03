<?php

namespace VkApigen\Method;

/**
 * Returns list of videos in which the user is tagged.
 */
class Video_GetUserVideos extends \VkApigen\BaseMethod
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
        return $this->onCall('video.getUserVideos');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Video_GetUserVideos
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Video_GetUserVideos
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : Video_GetUserVideos
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * 
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Video_GetUserVideos
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}