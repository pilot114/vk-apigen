<?php

namespace VkApigen\Method\Photos;

/**
 * Returns the server address for owner cover upload.
 */
class GetOwnerCoverPhotoUploadServer extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * X coordinate of the left-upper corner
     *
     * {"type":"int","default":0}
     */
    public function _crop_x(int $crop_x) : self
    {
        $this->params['crop_x'] = $crop_x;
        return $this;
    }
    /**
     * Y coordinate of the left-upper corner
     *
     * {"type":"int","default":0}
     */
    public function _crop_y(int $crop_y) : self
    {
        $this->params['crop_y'] = $crop_y;
        return $this;
    }
    /**
     * X coordinate of the right-bottom corner
     *
     * {"type":"int","default":785}
     */
    public function _crop_x2(int $crop_x2) : self
    {
        $this->params['crop_x2'] = $crop_x2;
        return $this;
    }
    /**
     * Y coordinate of the right-bottom corner
     *
     * {"type":"int","default":200}
     */
    public function _crop_y2(int $crop_y2) : self
    {
        $this->params['crop_y2'] = $crop_y2;
        return $this;
    }
}