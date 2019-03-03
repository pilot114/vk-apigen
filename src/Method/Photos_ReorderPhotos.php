<?php

namespace VkApigen\Method;

/**
 * Reorders the photo in the list of photos of the user album.
 */
class Photos_ReorderPhotos extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.reorderPhotos');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_ReorderPhotos
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : Photos_ReorderPhotos
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * ID of the photo before which the photo in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _before(int $before) : Photos_ReorderPhotos
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the photo after which the photo in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _after(int $after) : Photos_ReorderPhotos
    {
        $this->params['after'] = $after;
        return $this;
    }
}