<?php

namespace VkApigen\Method;

/**
 * Returns search results by statuses.
 */
class Newsfeed_Search extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.search');
    }
    /**
     * Search query string (e.g., 'New Year').
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Newsfeed_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * '1' — to return additional information about the user or community that placed the post.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Newsfeed_Search
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Number of posts to return.
     *
     * {"type":"int","minimum":0,"default":30,"maximum":200}
     */
    public function _count(int $count) : Newsfeed_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Geographical latitude point (in degrees, -90 to 90) within which to search.
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : Newsfeed_Search
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude point (in degrees, -180 to 180) within which to search.
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : Newsfeed_Search
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : Newsfeed_Search
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a news item to return. By default, the current time.
     *
     * {"type":"int","minimum":0}
     */
    public function _end_time(int $end_time) : Newsfeed_Search
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : Newsfeed_Search
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Newsfeed_Search
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}