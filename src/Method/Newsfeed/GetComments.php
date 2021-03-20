<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Returns a list of comments in the current user's newsfeed.
 */
class GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.getComments');
    }
    /**
     * Number of comments to return. For auto feed, you can use the 'new_offset' parameter returned by this method.
     *
     * {"type":"int","default":30,"minimum":0,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Filters to apply: 'post' — new comments on wall posts, 'photo' — new comments on photos, 'video' — new comments on videos, 'topic' — new comments on discussions, 'note' — new comments on notes,
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/newsfeed_comments_filters"}}
     */
    public function _filters(array $filters) : self
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Object ID, comments on repost of which shall be returned, e.g. 'wall1_45486'. (If the parameter is set, the 'filters' parameter is optional.),
     *
     * {"type":"string"}
     */
    public function _reposts(string $reposts) : self
    {
        $this->params['reposts'] = $reposts;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a comment to return. By default, 24 hours ago.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : self
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a comment to return. By default, the current time.
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
     * {"type":"int","default":0,"minimum":0,"maximum":10}
     */
    public function _last_comments_count(int $last_comments_count) : self
    {
        $this->params['last_comments_count'] = $last_comments_count;
        return $this;
    }
    /**
     * Identificator needed to return the next page with results. Value for this parameter returns in 'next_from' field.
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