<?php

namespace VkApigen\Method\Photos;

/**
 * Saves a profile or community photo. Upload URL can be got with the [vk.com/dev/photos.getOwnerPhotoUploadServer|photos.getOwnerPhotoUploadServer] method.
 */
class SaveOwnerPhoto extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _server(string $server) : self
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : self
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _photo(string $photo) : self
    {
        $this->params['photo'] = $photo;
        return $this;
    }
}