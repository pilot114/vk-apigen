<?php

namespace VkApigen\Method\Photos;

/**
 * Returns a list of photos in which a user is tagged.
 */
class GetUserPhotos extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('photos.getUserPhotos');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of photos. By default, '0'.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return. Maximum value is 1000.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field, '0' — (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Sort order: '1' — by date the tag was added in ascending order, '0' — by date the tag was added in descending order
     *
     * {"type":"string"}
     */
    public function _sort(string $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
}