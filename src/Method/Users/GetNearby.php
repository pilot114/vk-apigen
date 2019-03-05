<?php

namespace VkApigen\Method\Users;

/**
 * Indexes current user location and returns nearby users.
 */
class GetNearby extends \VkApigen\BaseMethod
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
        return $this->onCall('users.getNearby');
    }
    /**
     * geographic latitude of the place a user is located, in degrees (from -90 to 90)
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * geographic longitude of the place a user is located, in degrees (from -180 to 180)
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * current location accuracy in meters
     *
     * {"type":"int","minimum":0}
     */
    public function _accuracy(int $accuracy) : self
    {
        $this->params['accuracy'] = $accuracy;
        return $this;
    }
    /**
     * time when a user disappears from location search results, in seconds
     *
     * {"type":"int","minimum":0,"default":7200}
     */
    public function _timeout(int $timeout) : self
    {
        $this->params['timeout'] = $timeout;
        return $this;
    }
    /**
     * search zone radius type (1 to 4), :* 1 – 300 m,, :* 2 – 2400 m,, :* 3 – 18 km,, :* 4 – 150 km.
     *
     * {"type":"int","minimum":0,"default":1,"enum":[0,1,2,3,4],"enumNames":["any","300 m","2400 m","18 km","150 km."]}
     */
    public function _radius(int $radius) : self
    {
        $this->params['radius'] = $radius;
        return $this;
    }
    /**
     * list of additional fields to return. Available values: sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters, screen_name, maiden_name, timezone, occupation
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: , nom –nominative (default) , gen – genitive , dat – dative , acc – accusative , ins – instrumental , abl – prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : self
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}