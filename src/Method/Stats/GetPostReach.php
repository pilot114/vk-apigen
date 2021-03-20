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
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('stats.getPostReach');
    }
    /**
     * post owner community id. Specify with "-" sign.
     *
     * {"type":"string"}
     */
    public function owner_id(string $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * wall posts id
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":30}
     */
    public function post_ids(array $post_ids) : self
    {
        $this->params['post_ids'] = $post_ids;
        return $this;
    }
}