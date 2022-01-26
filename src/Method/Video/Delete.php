<?php

namespace VkApigen\Method\Video;

/**
 * Deletes a video from a user or community page.
 */
class Delete extends \VkApigen\BaseMethod
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
        return $this->onCall('video.delete');
    }
    /**
     * Video ID.
     *
     * {"type":"int","format":"int32","minimum":0}
     */
    public function video_id(int $video_id) : self
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
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
}