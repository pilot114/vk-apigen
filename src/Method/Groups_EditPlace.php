<?php

namespace VkApigen\Method;

/**
 * Edits the place in community.
 */
class Groups_EditPlace extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.editPlace');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Groups_EditPlace
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Place title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Groups_EditPlace
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Place address.
     *
     * {"type":"string"}
     */
    public function _address(string $address) : Groups_EditPlace
    {
        $this->params['address'] = $address;
        return $this;
    }
    /**
     * Country ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _country_id(int $country_id) : Groups_EditPlace
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _city_id(int $city_id) : Groups_EditPlace
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Geographical latitude.
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : Groups_EditPlace
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude.
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : Groups_EditPlace
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
}