<?php

namespace VkApigen\Method;

/**
 * Returns the server address for market album photo upload.
 */
class Photos_GetMarketAlbumUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getMarketAlbumUploadServer');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Photos_GetMarketAlbumUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}