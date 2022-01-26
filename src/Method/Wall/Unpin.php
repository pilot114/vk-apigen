<?php

namespace VkApigen\Method\Wall;

/**
 * Unpins the post on wall.
 */
class Unpin extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.unpin');
    }
    /**
     * ID of the user or community that owns the wall. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}