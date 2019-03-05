<?php

namespace VkApigen\Method\Newsfeed;

/**
 * , Returns a list of newsfeeds recommended to the current user.
 */
class GetRecommended extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.getRecommended');
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
     * Maximum number of photos to return. By default, '5'.
     *
     * {"type":"int","minimum":0,"default":5}
     */
    public function _max_photos(int $max_photos) : self
    {
        $this->params['max_photos'] = $max_photos;
        return $this;
    }
    /**
     * 'new_from' value obtained in previous call.
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : self
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Number of news items to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}