<?php

namespace VkApigen\Method;

/**
 * Returns a list of photos that the current user has liked.
 */
class Fave_GetPhotos extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.getPhotos');
    }
    /**
     * Offset needed to return a specific subset of photos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Fave_GetPhotos
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : Fave_GetPhotos
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a [vk.com/dev/photo_sizes|special format].
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : Fave_GetPhotos
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
}