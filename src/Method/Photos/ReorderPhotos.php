<?php

namespace VkApigen\Method\Photos;

/**
 * Reorders the photo in the list of photos of the user album.
 */
class ReorderPhotos extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.reorderPhotos');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : self
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * ID of the photo before which the photo in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _before(int $before) : self
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the photo after which the photo in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _after(int $after) : self
    {
        $this->params['after'] = $after;
        return $this;
    }
}