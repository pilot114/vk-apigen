<?php

namespace VkApigen\Method\Video;

/**
 * Adds a tag on a video.
 */
class PutTag extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('video.putTag');
    }
    /**
     * ID of the user to be tagged.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
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
    /**
     * Tag text.
     *
     * {"type":"string"}
     */
    public function _tagged_name(string $tagged_name) : self
    {
        $this->params['tagged_name'] = $tagged_name;
        return $this;
    }
}