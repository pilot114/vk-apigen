<?php

namespace VkApigen\Method;

/**
 * Returns a list of posts on user walls in which the current user is mentioned.
 */
class Newsfeed_GetMentions extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.getMentions');
    }
    /**
     * Owner ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Newsfeed_GetMentions
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a post to return. By default, 24 hours ago.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : Newsfeed_GetMentions
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a post to return. By default, the current time.
     *
     * {"type":"int","minimum":0}
     */
    public function _end_time(int $end_time) : Newsfeed_GetMentions
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of posts.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Newsfeed_GetMentions
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of posts to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":50}
     */
    public function _count(int $count) : Newsfeed_GetMentions
    {
        $this->params['count'] = $count;
        return $this;
    }
}