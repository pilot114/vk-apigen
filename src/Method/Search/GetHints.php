<?php

namespace VkApigen\Method\Search;

/**
 * Allows the programmer to do a quick search for any substring.
 */
class GetHints extends \VkApigen\BaseMethod
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
        return $this->onCall('search.getHints');
    }
    /**
     * Search query string.
     *
     * {"type":"string","maxLength":9000}
     */
    public function _q(string $q) : self
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Offset for querying specific result subset
     *
     * {"type":"int","minimum":0,"maximum":200}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum number of results to return.
     *
     * {"type":"int","default":9,"minimum":0,"maximum":200}
     */
    public function _limit(int $limit) : self
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $filters) : self
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":1}
     */
    public function _search_global(bool $search_global) : self
    {
        $this->params['search_global'] = $search_global;
        return $this;
    }
}