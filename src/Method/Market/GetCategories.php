<?php

namespace VkApigen\Method\Market;

/**
 * Returns a list of market categories.
 */
class GetCategories extends \VkApigen\BaseMethod
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
        return $this->onCall('market.getCategories');
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","default":10,"minimum":0,"maximum":1000}
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