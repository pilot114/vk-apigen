<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Returns search results by statuses.
 */
class Search extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'service']);
    }
    public function call()
    {
        return $this->onCall('newsfeed.search');
    }
    /**
     * Search query string (e.g., 'New Year').
     *
     * {"type":"string"}
     */
    public function _q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * '1' — to return additional information about the user or community that placed the post.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Number of posts to return.
     *
     * {"type":"int","default":30,"minimum":0,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Geographical latitude point (in degrees, -90 to 90) within which to search.
     *
     * {"type":"float"}
     */
    public function _latitude(float $latitude) : self
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude point (in degrees, -180 to 180) within which to search.
     *
     * {"type":"float"}
     */
    public function _longitude(float $longitude) : self
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : self
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a news item to return. By default, the current time.
     *
     * {"type":"int","minimum":0}
     */
    public function _end_time(int $end_time) : self
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : self
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/base_user_group_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}