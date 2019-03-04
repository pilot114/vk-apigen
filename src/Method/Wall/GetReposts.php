<?php

namespace VkApigen\Method\Wall;

/**
 * Returns information about reposts of a post on user wall or community wall.
 */
class GetReposts extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('wall.getReposts');
    }
    /**
     * User ID or community ID. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
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
    public function _post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of reposts.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of reposts to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}