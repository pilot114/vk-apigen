<?php

namespace VkApigen\Method\Places;

/**
 * Returns a list of user check-ins at locations according to the set parameters.
 */
class GetCheckins extends \VkApigen\BaseMethod
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
        return $this->onCall('places.getCheckins');
    }
    /**
     * Geographical latitude of the initial search point, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude of the initial search point, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Location ID of check-ins to return. (Ignored if 'latitude' and 'longitude' are specified.)
     *
     * {"type":"int","minimum":0}
     */
    public function _place(int $place) : self
    {
        $this->params['place'] = $place;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of check-ins. (Ignored if 'timestamp' is not null.)
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of check-ins to return. (Ignored if 'timestamp' is not null.)
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Specifies that only those check-ins created after the specified timestamp will be returned.
     *
     * {"type":"int","minimum":0}
     */
    public function _timestamp(int $timestamp) : self
    {
        $this->params['timestamp'] = $timestamp;
        return $this;
    }
    /**
     * '1' — to return only check-ins with set geographical coordinates. (Ignored if 'latitude' and 'longitude' are not set.)
     *
     * {"type":"bool"}
     */
    public function _friends_only(bool $friends_only) : self
    {
        $this->params['friends_only'] = $friends_only;
        return $this;
    }
    /**
     * '1' — to return location information with the check-ins. (Ignored if 'place' is not set.),
     *
     * {"type":"bool"}
     */
    public function _need_places(bool $need_places) : self
    {
        $this->params['need_places'] = $need_places;
        return $this;
    }
}