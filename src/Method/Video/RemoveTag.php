<?php

namespace VkApigen\Method\Video;

/**
 * Removes a tag from a video.
 */
class RemoveTag extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('video.removeTag');
    }
    /**
     * Tag ID.
     *
     * {"type":"int"}
     */
    public function tag_id(int $tag_id) : self
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : self
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}