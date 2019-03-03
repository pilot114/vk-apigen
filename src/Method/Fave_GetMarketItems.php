<?php

namespace VkApigen\Method;

/**
 * Returns market items bookmarked by current user.
 */
class Fave_GetMarketItems extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.getMarketItems');
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : Fave_GetMarketItems
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' – to return additional fields 'likes, can_comment, can_repost, photos'. By default: '0'.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Fave_GetMarketItems
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}