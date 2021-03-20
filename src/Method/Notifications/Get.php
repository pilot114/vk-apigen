<?php

namespace VkApigen\Method\Notifications;

/**
 * Returns a list of notifications about other users' feedback to the current user's wall posts.
 */
class Get extends \VkApigen\BaseMethod
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
        return $this->onCall('notifications.get');
    }
    /**
     * Number of notifications to return.
     *
     * {"type":"int","default":30,"minimum":1,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
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
     * Type of notifications to return: 'wall' — wall posts, 'mentions' — mentions in wall posts, comments, or topics, 'comments' — comments to wall posts, photos, and videos, 'likes' — likes, 'reposted' — wall posts that are copied from the current user's wall, 'followers' — new followers, 'friends' — accepted friend requests
     *
     * {"type":"array","items":{"type":"string","enum":["wall","mentions","comments","likes","reposted","followers","friends"]}}
     */
    public function _filters(array $filters) : self
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a notification to return. By default, 24 hours ago.
     *
     * {"type":"int"}
     */
    public function _start_time(int $start_time) : self
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a notification to return. By default, the current time.
     *
     * {"type":"int"}
     */
    public function _end_time(int $end_time) : self
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
}