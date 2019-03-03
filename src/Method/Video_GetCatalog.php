<?php

namespace VkApigen\Method;

/**
 * Returns video catalog
 */
class Video_GetCatalog extends \VkApigen\BaseMethod
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
        return $this->onCall('video.getCatalog');
    }
    /**
     * number of catalog blocks to return.
     *
     * {"type":"int","minimum":0,"default":10,"maximum":16}
     */
    public function _count(int $count) : Video_GetCatalog
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * number of videos in each block.
     *
     * {"type":"int","minimum":0,"default":10,"maximum":16}
     */
    public function _items_count(int $items_count) : Video_GetCatalog
    {
        $this->params['items_count'] = $items_count;
        return $this;
    }
    /**
     * parameter for requesting the next results page. Value for transmitting here is returned in the 'next' field in a reply.
     *
     * {"type":"string"}
     */
    public function _from(string $from) : Video_GetCatalog
    {
        $this->params['from'] = $from;
        return $this;
    }
    /**
     * list of requested catalog sections
     *
     * {"default":0,"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $filters) : Video_GetCatalog
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * 1 – return additional infor about users and communities in profiles and groups fields.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Video_GetCatalog
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}