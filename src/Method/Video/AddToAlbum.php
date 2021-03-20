<?php

namespace VkApigen\Method\Video;

/**
 * Нет описания
 */
class AddToAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('video.addToAlbum');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _target_id(int $target_id) : self
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _album_ids(array $album_ids) : self
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : self
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}