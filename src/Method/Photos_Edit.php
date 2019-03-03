<?php

namespace VkApigen\Method;

/**
 * Edits the caption of a photo.
 */
class Photos_Edit extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.edit');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_Edit
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function photo_id(int $photo_id) : Photos_Edit
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * New caption for the photo. If this parameter is not set, it is considered to be equal to an empty string.
     *
     * {"type":"string"}
     */
    public function _caption(string $caption) : Photos_Edit
    {
        $this->params['caption'] = $caption;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : Photos_Edit
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : Photos_Edit
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _place_str(string $place_str) : Photos_Edit
    {
        $this->params['place_str'] = $place_str;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _foursquare_id(string $foursquare_id) : Photos_Edit
    {
        $this->params['foursquare_id'] = $foursquare_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"bool"}
     */
    public function _delete_place(bool $delete_place) : Photos_Edit
    {
        $this->params['delete_place'] = $delete_place;
        return $this;
    }
}