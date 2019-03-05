<?php

namespace VkApigen\Method\Photos;

/**
 * Returns an upload link for chat cover pictures.
 */
class GetChatUploadServer extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getChatUploadServer');
    }
    /**
     * ID of the chat for which you want to upload a cover photo.
     *
     * {"type":"int","minimum":0}
     */
    public function chat_id(int $chat_id) : self
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _crop_x(int $crop_x) : self
    {
        $this->params['crop_x'] = $crop_x;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _crop_y(int $crop_y) : self
    {
        $this->params['crop_y'] = $crop_y;
        return $this;
    }
    /**
     * Width (in pixels) of the photo after cropping.
     *
     * {"type":"int","minimum":200}
     */
    public function _crop_width(int $crop_width) : self
    {
        $this->params['crop_width'] = $crop_width;
        return $this;
    }
}