<?php

namespace VkApigen\Method;

/**
 * Returns stats for a wall post.
 */
class Stats_GetPostReach extends \VkApigen\BaseMethod
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
        return $this->onCall('stats.getPostReach');
    }
    /**
     * post owner community id. Specify with "-" sign.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Stats_GetPostReach
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * wall post id. Note that stats are available only for '300' last (newest) posts on a community wall.
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : Stats_GetPostReach
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}