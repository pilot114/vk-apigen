<?php

namespace VkApigen\Method;

/**
 * Returns an upload link for chat cover pictures.
 */
class Photos_GetChatUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getChatUploadServer');
    }
    /**
     * ID of the chat for which you want to upload a cover photo.
     *
     * {"type":"int","minimum":0}
     */
    public function chat_id(int $chat_id) : Photos_GetChatUploadServer
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int","minimum":0}
     */
    public function _crop_x(int $crop_x) : Photos_GetChatUploadServer
    {
        $this->params['crop_x'] = $crop_x;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int","minimum":0}
     */
    public function _crop_y(int $crop_y) : Photos_GetChatUploadServer
    {
        $this->params['crop_y'] = $crop_y;
        return $this;
    }
    /**
     * Width (in pixels) of the photo after cropping.
     *
     * {"type":"int","minimum":200}
     */
    public function _crop_width(int $crop_width) : Photos_GetChatUploadServer
    {
        $this->params['crop_width'] = $crop_width;
        return $this;
    }
}