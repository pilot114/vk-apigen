<?php

namespace VkApigen\Method;

/**
 * Restores a deleted photo.
 */
class Photos_Restore extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.restore');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_Restore
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function photo_id(int $photo_id) : Photos_Restore
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
}