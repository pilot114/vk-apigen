<?php

namespace VkApigen\Method;

/**
 * Returns a list of video albums owned by a user or community.
 */
class Video_GetAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('video.getAlbums');
    }
    /**
     * ID of the user or community that owns the video album(s).
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_GetAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of video albums.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Video_GetAlbums
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of video albums to return.
     *
     * {"type":"int","minimum":0,"default":50,"maximum":100}
     */
    public function _count(int $count) : Video_GetAlbums
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return additional information about album privacy settings for the current user
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Video_GetAlbums
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}