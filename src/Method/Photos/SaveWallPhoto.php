<?php

namespace VkApigen\Method\Photos;

/**
 * Saves a photo to a user's or community's wall after being uploaded.
 */
class SaveWallPhoto extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('photos.saveWallPhoto');
    }
    /**
     * ID of the user on whose wall the photo will be saved.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * ID of community on whose wall the photo will be saved.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Parameter returned when the the photo is [vk.com/dev/upload_files|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : self
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _server(int $server) : self
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : self
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * {"type":"float"}
     */
    public function _latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude, in degrees (from '-180' to '180').
     *
     * {"type":"float"}
     */
    public function _longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Text describing the photo. 2048 digits max.
     *
     * {"type":"string"}
     */
    public function _caption(string $caption) : self
    {
        $this->params['caption'] = $caption;
        return $this;
    }
}