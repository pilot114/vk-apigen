<?php

namespace VkApigen\Method\Wall;

/**
 * Returns a list of posts from user or community walls by their IDs.
 */
class GetById extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('wall.getById');
    }
    /**
     * User or community IDs and post IDs, separated by underscores. Use a negative value to designate a community ID. Example: "93388_21539,93388_20904,2943_4276,-1_1"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function posts(array $posts) : self
    {
        $this->params['posts'] = $posts;
        return $this;
    }
    /**
     * '1' — to return user and community objects needed to display posts, '0' — no additional fields are returned (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Sets the number of parent elements to include in the array 'copy_history' that is returned if the post is a repost from another wall.
     *
     * {"type":"int","default":2}
     */
    public function _copy_history_depth(int $copy_history_depth) : self
    {
        $this->params['copy_history_depth'] = $copy_history_depth;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}