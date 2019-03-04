<?php

namespace VkApigen\Method\Photos;

/**
 * Returns a list of photos with tags that have not been viewed.
 */
class GetNewTags extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"int","minimum":0,"maximum":100,"default":20}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}