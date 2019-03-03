<?php

namespace VkApigen\Method;

/**
 * Saves photos after successful uploading.
 */
class Photos_Save extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.save');
    }
    /**
     * ID of the album to save photos to.
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : Photos_Save
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the community to save photos to.
     *
     * {"type":"int"}
     */
    public function _group_id(int $group_id) : Photos_Save
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"int"}
     */
    public function _server(int $server) : Photos_Save
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function _photos_list(string $photos_list) : Photos_Save
    {
        $this->params['photos_list'] = $photos_list;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : Photos_Save
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : Photos_Save
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : Photos_Save
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Text describing the photo. 2048 digits max.
     *
     * {"type":"string","maxLength":2048}
     */
    public function _caption(string $caption) : Photos_Save
    {
        $this->params['caption'] = $caption;
        return $this;
    }
}