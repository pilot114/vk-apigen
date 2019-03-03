<?php

namespace VkApigen\Method;

/**
 * Adds a new location to the location database.
 */
class Places_Add extends \VkApigen\BaseMethod
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
        return $this->onCall('places.add');
    }
    /**
     * ID of the location's type (e.g., '1' — Home, '2' — Work). To get location type IDs, use the [vk.com/dev/places.getTypes|places.getTypes] method.
     *
     * {"type":"int","minimum":0}
     */
    public function _type(int $type) : Places_Add
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Title of the location.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Places_Add
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function latitude(float $latitude) : Places_Add
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function longitude(float $longitude) : Places_Add
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * ID of the location's country. To get country IDs, use the [vk.com/dev/database.getCountries|database.getCountries] method.
     *
     * {"type":"int","minimum":0}
     */
    public function _country(int $country) : Places_Add
    {
        $this->params['country'] = $country;
        return $this;
    }
    /**
     * ID of the location's city. To get city IDs, use the [vk.com/dev/database.getCities|database.getCities] method.
     *
     * {"type":"int","minimum":0}
     */
    public function _city(int $city) : Places_Add
    {
        $this->params['city'] = $city;
        return $this;
    }
    /**
     * Street address of the location (e.g., '125 Elm Street').
     *
     * {"type":"string"}
     */
    public function _address(string $address) : Places_Add
    {
        $this->params['address'] = $address;
        return $this;
    }
}