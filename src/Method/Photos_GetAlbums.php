<?php

namespace VkApigen\Method;

/**
 * Returns a list of a user's or community's photo albums.
 */
class Photos_GetAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getAlbums');
    }
    /**
     * ID of the user or community that owns the albums.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_GetAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album IDs.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _album_ids(array $album_ids) : Photos_GetAlbums
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of albums.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Photos_GetAlbums
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of albums to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : Photos_GetAlbums
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return system albums with negative IDs
     *
     * {"type":"bool"}
     */
    public function _need_system(bool $need_system) : Photos_GetAlbums
    {
        $this->params['need_system'] = $need_system;
        return $this;
    }
    /**
     * '1' — to return an additional 'thumb_src' field, '0' — (default)
     *
     * {"type":"bool"}
     */
    public function _need_covers(bool $need_covers) : Photos_GetAlbums
    {
        $this->params['need_covers'] = $need_covers;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : Photos_GetAlbums
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
}