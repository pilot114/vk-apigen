<?php

namespace VkApigen\Method;

/**
 * Removes a tag from a photo.
 */
class Photos_RemoveTag extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.removeTag');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_RemoveTag
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : Photos_RemoveTag
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Tag ID.
     *
     * {"type":"int"}
     */
    public function tag_id(int $tag_id) : Photos_RemoveTag
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
}