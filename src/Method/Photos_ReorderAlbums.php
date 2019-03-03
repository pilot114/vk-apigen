<?php

namespace VkApigen\Method;

/**
 * Reorders the album in the list of user albums.
 */
class Photos_ReorderAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.reorderAlbums');
    }
    /**
     * ID of the user or community that owns the album.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_ReorderAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int"}
     */
    public function album_id(int $album_id) : Photos_ReorderAlbums
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the album before which the album in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _before(int $before) : Photos_ReorderAlbums
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the album after which the album in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _after(int $after) : Photos_ReorderAlbums
    {
        $this->params['after'] = $after;
        return $this;
    }
}