<?php

namespace VkApigen\Method;

/**
 * Reorders the album in the list of user video albums.
 */
class Video_ReorderAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('video.reorderAlbums');
    }
    /**
     * ID of the user or community that owns the albums..
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_ReorderAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : Video_ReorderAlbums
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the album before which the album in question shall be placed.
     *
     * {"type":"int","minimum":0}
     */
    public function _before(int $before) : Video_ReorderAlbums
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the album after which the album in question shall be placed.
     *
     * {"type":"int","minimum":0}
     */
    public function _after(int $after) : Video_ReorderAlbums
    {
        $this->params['after'] = $after;
        return $this;
    }
}