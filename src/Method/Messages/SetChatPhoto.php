<?php

namespace VkApigen\Method\Messages;

/**
 * Sets a previously-uploaded picture as the cover picture of a chat.
 */
class SetChatPhoto extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.setChatPhoto');
    }
    /**
     * Upload URL from the 'response' field returned by the [vk.com/dev/photos.getChatUploadServer|photos.getChatUploadServer] method upon successfully uploading an image.
     *
     * {"type":"string"}
     */
    public function file(string $file) : self
    {
        $this->params['file'] = $file;
        return $this;
    }
}