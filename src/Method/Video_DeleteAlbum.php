<?php

namespace VkApigen\Method;

/**
 * Deletes a video album.
 */
class Video_DeleteAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('video.deleteAlbum');
    }
    /**
     * Community ID (if the album is owned by a community).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Video_DeleteAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : Video_DeleteAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}