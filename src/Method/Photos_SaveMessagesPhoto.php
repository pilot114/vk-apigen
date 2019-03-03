<?php

namespace VkApigen\Method;

/**
 * Saves a photo after being successfully uploaded. URL obtained with [vk.com/dev/photos.getMessagesUploadServer|photos.getMessagesUploadServer] method.
 */
class Photos_SaveMessagesPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.saveMessagesPhoto');
    }
    /**
     * Parameter returned when the photo is [vk.com/dev/upload_files|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : Photos_SaveMessagesPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _server(int $server) : Photos_SaveMessagesPhoto
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : Photos_SaveMessagesPhoto
    {
        $this->params['hash'] = $hash;
        return $this;
    }
}