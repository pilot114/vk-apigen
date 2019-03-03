<?php

namespace VkApigen\Method;

/**
 * Returns a list of posts from user or community walls by their IDs.
 */
class Wall_GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.getById');
    }
    /**
     * User or community IDs and post IDs, separated by underscores. Use a negative value to designate a community ID. Example: "93388_21539,93388_20904,2943_4276,-1_1"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function posts(array $posts) : Wall_GetById
    {
        $this->params['posts'] = $posts;
        return $this;
    }
    /**
     * '1' — to return user and community objects needed to display posts, '0' — no additional fields are returned (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Wall_GetById
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Sets the number of parent elements to include in the array 'copy_history' that is returned if the post is a repost from another wall.
     *
     * {"type":"int","default":2}
     */
    public function _copy_history_depth(int $copy_history_depth) : Wall_GetById
    {
        $this->params['copy_history_depth'] = $copy_history_depth;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Wall_GetById
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}