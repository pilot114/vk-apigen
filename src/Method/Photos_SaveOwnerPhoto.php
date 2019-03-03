<?php

namespace VkApigen\Method;

/**
 * Saves a profile or community photo. Upload URL can be got with the [vk.com/dev/photos.getOwnerPhotoUploadServer|photos.getOwnerPhotoUploadServer] method.
 */
class Photos_SaveOwnerPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.saveOwnerPhoto');
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _server(string $server) : Photos_SaveOwnerPhoto
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : Photos_SaveOwnerPhoto
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _photo(string $photo) : Photos_SaveOwnerPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
}