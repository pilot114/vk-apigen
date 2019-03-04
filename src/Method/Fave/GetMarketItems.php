<?php

namespace VkApigen\Method\Fave;

/**
 * Returns market items bookmarked by current user.
 */
class GetMarketItems extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('fave.getMarketItems');
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' – to return additional fields 'likes, can_comment, can_repost, photos'. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}