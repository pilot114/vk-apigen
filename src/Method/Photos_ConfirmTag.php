<?php

namespace VkApigen\Method;

/**
 * Confirms a tag on a photo.
 */
class Photos_ConfirmTag extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.confirmTag');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_ConfirmTag
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"string"}
     */
    public function photo_id(string $photo_id) : Photos_ConfirmTag
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Tag ID.
     *
     * {"type":"int"}
     */
    public function tag_id(int $tag_id) : Photos_ConfirmTag
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
}