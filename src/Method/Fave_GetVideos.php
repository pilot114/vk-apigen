<?php

namespace VkApigen\Method;

/**
 * Returns a list of videos that the current user has liked.
 */
class Fave_GetVideos extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.getVideos');
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Fave_GetVideos
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : Fave_GetVideos
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Return an additional information about videos. Also returns all owners profiles and groups.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Fave_GetVideos
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}