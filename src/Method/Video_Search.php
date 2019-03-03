<?php

namespace VkApigen\Method;

/**
 * Returns a list of videos under the set search criterion.
 */
class Video_Search extends \VkApigen\BaseMethod
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
        return $this->onCall('video.search');
    }
    /**
     * Search query string (e.g., 'The Beatles').
     *
     * {"type":"string"}
     */
    public function q(string $q) : Video_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Sort order: '1' — by duration, '2' — by relevance, '0' — by date added
     *
     * {"type":"int","enum":[1,2,0],"enumNames":["duration","relevance","date added"]}
     */
    public function _sort(int $sort) : Video_Search
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * If not null, only searches for high-definition videos.
     *
     * {"type":"int"}
     */
    public function _hd(int $hd) : Video_Search
    {
        $this->params['hd'] = $hd;
        return $this;
    }
    /**
     * '1' — to disable the Safe Search filter, '0' — to enable the Safe Search filter
     *
     * {"type":"bool"}
     */
    public function _adult(bool $adult) : Video_Search
    {
        $this->params['adult'] = $adult;
        return $this;
    }
    /**
     * Filters to apply: 'youtube' — return YouTube videos only, 'vimeo' — return Vimeo videos only, 'short' — return short videos only, 'long' — return long videos only
     *
     * {"type":"array","items":{"type":"string","enum":["youtube","vimeo","short","long"]}}
     */
    public function _filters(array $filters) : Video_Search
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * 
     *
     * {"type":"bool"}
     */
    public function _search_own(bool $search_own) : Video_Search
    {
        $this->params['search_own'] = $search_own;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Video_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _longer(int $longer) : Video_Search
    {
        $this->params['longer'] = $longer;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _shorter(int $shorter) : Video_Search
    {
        $this->params['shorter'] = $shorter;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : Video_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * 
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Video_Search
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}