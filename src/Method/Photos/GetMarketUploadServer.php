<?php

namespace VkApigen\Method\Photos;

/**
 * Returns the server address for market photo upload.
 */
class GetMarketUploadServer extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('photos.getMarketUploadServer');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * '1' if you want to upload the main item photo.
     *
     * {"type":"bool"}
     */
    public function _main_photo(bool $main_photo) : self
    {
        $this->params['main_photo'] = $main_photo;
        return $this;
    }
    /**
     * X coordinate of the crop left upper corner.
     *
     * {"type":"int","minimum":0}
     */
    public function _crop_x(int $crop_x) : self
    {
        $this->params['crop_x'] = $crop_x;
        return $this;
    }
    /**
     * Y coordinate of the crop left upper corner.
     *
     * {"type":"int","minimum":0}
     */
    public function _crop_y(int $crop_y) : self
    {
        $this->params['crop_y'] = $crop_y;
        return $this;
    }
    /**
     * Width of the cropped photo in px.
     *
     * {"type":"int","minimum":400}
     */
    public function _crop_width(int $crop_width) : self
    {
        $this->params['crop_width'] = $crop_width;
        return $this;
    }
}