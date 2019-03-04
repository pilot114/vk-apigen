<?php

namespace VkApigen\Method\Video;

/**
 * Returns video catalog
 */
class GetCatalog extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('video.getCatalog');
    }
    /**
     * number of catalog blocks to return.
     *
     * {"type":"int","minimum":0,"default":10,"maximum":16}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * number of videos in each block.
     *
     * {"type":"int","minimum":0,"default":10,"maximum":16}
     */
    public function _items_count(int $items_count) : self
    {
        $this->params['items_count'] = $items_count;
        return $this;
    }
    /**
     * parameter for requesting the next results page. Value for transmitting here is returned in the 'next' field in a reply.
     *
     * {"type":"string"}
     */
    public function _from(string $from) : self
    {
        $this->params['from'] = $from;
        return $this;
    }
    /**
     * list of requested catalog sections
     *
     * {"default":0,"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $filters) : self
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * 1 – return additional infor about users and communities in profiles and groups fields.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}