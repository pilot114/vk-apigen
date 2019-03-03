<?php

namespace VkApigen\Method;

/**
 * Returns information about reposts of a post on user wall or community wall.
 */
class Wall_GetReposts extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.getReposts');
    }
    /**
     * User ID or community ID. By default, current user ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_GetReposts
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _post_id(int $post_id) : Wall_GetReposts
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of reposts.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Wall_GetReposts
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of reposts to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(int $count) : Wall_GetReposts
    {
        $this->params['count'] = $count;
        return $this;
    }
}