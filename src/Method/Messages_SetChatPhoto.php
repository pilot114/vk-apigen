<?php

namespace VkApigen\Method;

/**
 * Sets a previously-uploaded picture as the cover picture of a chat.
 */
class Messages_SetChatPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.setChatPhoto');
    }
    /**
     * Upload URL from the 'response' field returned by the [vk.com/dev/photos.getChatUploadServer|photos.getChatUploadServer] method upon successfully uploading an image.
     *
     * {"type":"string"}
     */
    public function file(string $file) : Messages_SetChatPhoto
    {
        $this->params['file'] = $file;
        return $this;
    }
}