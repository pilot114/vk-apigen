<?php

namespace VkApigen\Method;

/**
 * Returns the server address for owner cover upload.
 */
class Photos_GetOwnerCoverPhotoUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getOwnerCoverPhotoUploadServer');
    }
    /**
     * ID of community that owns the album (if the photo will be uploaded to a community album).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Photos_GetOwnerCoverPhotoUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * X coordinate of the left-upper corner
     *
     * {"type":"int","default":0}
     */
    public function _crop_x(int $crop_x) : Photos_GetOwnerCoverPhotoUploadServer
    {
        $this->params['crop_x'] = $crop_x;
        return $this;
    }
    /**
     * Y coordinate of the left-upper corner
     *
     * {"type":"int","default":0}
     */
    public function _crop_y(int $crop_y) : Photos_GetOwnerCoverPhotoUploadServer
    {
        $this->params['crop_y'] = $crop_y;
        return $this;
    }
    /**
     * X coordinate of the right-bottom corner
     *
     * {"type":"int","default":785}
     */
    public function _crop_x2(int $crop_x2) : Photos_GetOwnerCoverPhotoUploadServer
    {
        $this->params['crop_x2'] = $crop_x2;
        return $this;
    }
    /**
     * Y coordinate of the right-bottom corner
     *
     * {"type":"int","default":200}
     */
    public function _crop_y2(int $crop_y2) : Photos_GetOwnerCoverPhotoUploadServer
    {
        $this->params['crop_y2'] = $crop_y2;
        return $this;
    }
}