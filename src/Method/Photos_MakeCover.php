<?php

namespace VkApigen\Method;

/**
 * Makes a photo into an album cover.
 */
class Photos_MakeCover extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.makeCover');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_MakeCover
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : Photos_MakeCover
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : Photos_MakeCover
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}