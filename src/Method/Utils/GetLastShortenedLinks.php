<?php

namespace VkApigen\Method\Utils;

/**
 * Returns a list of user's shortened links.
 */
class GetLastShortenedLinks extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('utils.getLastShortenedLinks');
    }
    /**
     * Number of links to return.
     *
     * {"type":"int","minimum":0,"default":10}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of links.
     *
     * {"type":"int","minimum":0,"default":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}