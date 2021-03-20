<?php

namespace VkApigen\Method\Groups;

/**
 * Нет описания
 */
class AddAddress extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('groups.addAddress');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":255}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":255}
     */
    public function address(string $address) : self
    {
        $this->params['address'] = $address;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":400}
     */
    public function _additional_address(string $additional_address) : self
    {
        $this->params['additional_address'] = $additional_address;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":1}
     */
    public function country_id(int $country_id) : self
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":1}
     */
    public function city_id(int $city_id) : self
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _metro_id(int $metro_id) : self
    {
        $this->params['metro_id'] = $metro_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _phone(string $phone) : self
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"no_information","enum":["always_opened","forever_closed","no_information","temporarily_closed","timetable"],"$ref":"objects.json#\/definitions\/groups_address_work_info_status"}
     */
    public function _work_info_status(string $work_info_status) : self
    {
        $this->params['work_info_status'] = $work_info_status;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _timetable(string $timetable) : self
    {
        $this->params['timetable'] = $timetable;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _is_main_address(bool $is_main_address) : self
    {
        $this->params['is_main_address'] = $is_main_address;
        return $this;
    }
}