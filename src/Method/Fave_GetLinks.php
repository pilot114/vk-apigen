<?php

namespace VkApigen\Method;

/**
 * Returns a list of links that the current user has bookmarked.
 */
class Fave_GetLinks extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.getLinks');
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Fave_GetLinks
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : Fave_GetLinks
    {
        $this->params['count'] = $count;
        return $this;
    }
}