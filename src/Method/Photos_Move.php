<?php

namespace VkApigen\Method;

/**
 * Moves a photo from one album to another.
 */
class Photos_Move extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.move');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_Move
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the album to which the photo will be moved.
     *
     * {"type":"int"}
     */
    public function target_album_id(int $target_album_id) : Photos_Move
    {
        $this->params['target_album_id'] = $target_album_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : Photos_Move
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
}