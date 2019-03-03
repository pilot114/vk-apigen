<?php

namespace VkApigen\Method;

/**
 * Returns a list of photos with tags that have not been viewed.
 */
class Photos_GetNewTags extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getNewTags');
    }
    /**
     * Offset needed to return a specific subset of photos.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Photos_GetNewTags
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"int","minimum":0,"maximum":100,"default":20}
     */
    public function _count(int $count) : Photos_GetNewTags
    {
        $this->params['count'] = $count;
        return $this;
    }
}