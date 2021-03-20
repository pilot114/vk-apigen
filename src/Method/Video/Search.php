<?php

namespace VkApigen\Method\Video;

/**
 * Returns a list of videos under the set search criterion.
 */
class Search extends \VkApigen\BaseMethod
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
        return $this->onCall('video.search');
    }
    /**
     * Search query string (e.g., 'The Beatles').
     *
     * {"type":"string"}
     */
    public function q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Sort order: '1' — by duration, '2' — by relevance, '0' — by date added
     *
     * {"type":"int","enum":[1,2,0],"enumNames":["duration","relevance","date added"]}
     */
    public function _sort(int $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * If not null, only searches for high-definition videos.
     *
     * {"type":"int"}
     */
    public function _hd(int $hd) : self
    {
        $this->params['hd'] = $hd;
        return $this;
    }
    /**
     * '1' — to disable the Safe Search filter, '0' — to enable the Safe Search filter
     *
     * {"type":"bool"}
     */
    public function _adult(bool $adult) : self
    {
        $this->params['adult'] = $adult;
        return $this;
    }
    /**
     * Filters to apply: 'youtube' — return YouTube videos only, 'vimeo' — return Vimeo videos only, 'short' — return short videos only, 'long' — return long videos only
     *
     * {"type":"array","items":{"type":"string","enum":["youtube","vimeo","short","long"]}}
     */
    public function _filters(array $filters) : self
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _search_own(bool $search_own) : self
    {
        $this->params['search_own'] = $search_own;
        return $this;
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
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _longer(int $longer) : self
    {
        $this->params['longer'] = $longer;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _shorter(int $shorter) : self
    {
        $this->params['shorter'] = $shorter;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}