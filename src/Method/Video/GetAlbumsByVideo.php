<?php

namespace VkApigen\Method\Video;

/**
 * Нет описания
 */
class GetAlbumsByVideo extends \VkApigen\BaseMethod
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
        return $this->onCall('video.getAlbumsByVideo');
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _target_id(int $target_id) : self
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int32","minimum":0}
     */
    public function video_id(int $video_id) : self
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}