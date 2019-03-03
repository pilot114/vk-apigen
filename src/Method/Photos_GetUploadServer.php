<?php

namespace VkApigen\Method;

/**
 * Returns the server address for photo upload.
 */
class Photos_GetUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getUploadServer');
    }
    /**
     * Album ID.
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : Photos_GetUploadServer
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of community that owns the album (if the photo will be uploaded to a community album).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Photos_GetUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}