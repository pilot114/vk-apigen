<?php

namespace VkApigen\Method;

/**
 * Allows the programmer to do a quick search for any substring.
 */
class Search_GetHints extends \VkApigen\BaseMethod
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
        return $this->onCall('search.getHints');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Search_GetHints
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Offset for querying specific result subset
     *
     * {"type":"int","minimum":0,"maximum":200}
     */
    public function _offset(int $offset) : Search_GetHints
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum number of results to return.
     *
     * {"type":"int","minimum":0,"maximum":200,"default":9}
     */
    public function _limit(int $limit) : Search_GetHints
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * 
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $filters) : Search_GetHints
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * 
     *
     * {"type":"bool","default":1}
     */
    public function _search_global(bool $search_global) : Search_GetHints
    {
        $this->params['search_global'] = $search_global;
        return $this;
    }
}