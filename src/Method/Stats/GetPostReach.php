<?php

namespace VkApigen\Method\Stats;

/**
 * Returns stats for a wall post.
 */
class GetPostReach extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * wall post id. Note that stats are available only for '300' last (newest) posts on a community wall.
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}