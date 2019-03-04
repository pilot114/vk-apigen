<?php

namespace VkApigen\Method\Docs;

/**
 * Returns a list of documents matching the search criteria.
 */
class Search extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('docs.search');
    }
    /**
     * Search query string.
     *
     * {"type":"string","maxLength":512}
     */
    public function q(string $q) : self
    {
        $this->params['q'] = $q;
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
     * Number of results to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}