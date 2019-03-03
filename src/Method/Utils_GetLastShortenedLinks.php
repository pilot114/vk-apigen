<?php

namespace VkApigen\Method;

/**
 * Returns a list of user's shortened links.
 */
class Utils_GetLastShortenedLinks extends \VkApigen\BaseMethod
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
        return $this->onCall('utils.getLastShortenedLinks');
    }
    /**
     * Number of links to return.
     *
     * {"type":"int","minimum":0,"default":10}
     */
    public function _count(int $count) : Utils_GetLastShortenedLinks
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of links.
     *
     * {"type":"int","minimum":0,"default":0}
     */
    public function _offset(int $offset) : Utils_GetLastShortenedLinks
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}