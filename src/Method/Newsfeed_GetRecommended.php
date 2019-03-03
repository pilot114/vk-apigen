<?php

namespace VkApigen\Method;

/**
 * , Returns a list of newsfeeds recommended to the current user.
 */
class Newsfeed_GetRecommended extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.getRecommended');
    }
    /**
     * Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : Newsfeed_GetRecommended
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a news item to return. By default, the current time.
     *
     * {"type":"int","minimum":0}
     */
    public function _end_time(int $end_time) : Newsfeed_GetRecommended
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
    /**
     * Maximum number of photos to return. By default, '5'.
     *
     * {"type":"int","minimum":0,"default":5}
     */
    public function _max_photos(int $max_photos) : Newsfeed_GetRecommended
    {
        $this->params['max_photos'] = $max_photos;
        return $this;
    }
    /**
     * 'new_from' value obtained in previous call.
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : Newsfeed_GetRecommended
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Number of news items to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : Newsfeed_GetRecommended
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Newsfeed_GetRecommended
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}