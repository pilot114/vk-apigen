<?php

namespace VkApigen\Method;

/**
 * Deletes a photo album belonging to the current user.
 */
class Photos_DeleteAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.deleteAlbum');
    }
    /**
     * Album ID.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : Photos_DeleteAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the community that owns the album.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Photos_DeleteAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}