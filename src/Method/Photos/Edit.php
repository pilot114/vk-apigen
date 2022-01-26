<?php

namespace VkApigen\Method\Photos;

/**
 * Edits the caption of a photo.
 */
class Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.edit');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function photo_id(int $photo_id) : self
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * New caption for the photo. If this parameter is not set, it is considered to be equal to an empty string.
     *
     * {"type":"string"}
     */
    public function _caption(string $caption) : self
    {
        $this->params['caption'] = $caption;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float"}
     */
    public function _latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float"}
     */
    public function _longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _place_str(string $place_str) : self
    {
        $this->params['place_str'] = $place_str;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _foursquare_id(string $foursquare_id) : self
    {
        $this->params['foursquare_id'] = $foursquare_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _delete_place(bool $delete_place) : self
    {
        $this->params['delete_place'] = $delete_place;
        return $this;
    }
}