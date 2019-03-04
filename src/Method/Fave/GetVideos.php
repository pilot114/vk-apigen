<?php

namespace VkApigen\Method\Fave;

/**
 * Returns a list of videos that the current user has liked.
 */
class GetVideos extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('fave.getVideos');
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Return an additional information about videos. Also returns all owners profiles and groups.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}