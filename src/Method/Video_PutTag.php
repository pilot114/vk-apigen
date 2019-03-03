<?php

namespace VkApigen\Method;

/**
 * Adds a tag on a video.
 */
class Video_PutTag extends \VkApigen\BaseMethod
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
        return $this->onCall('video.putTag');
    }
    /**
     * ID of the user to be tagged.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Video_PutTag
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : Video_PutTag
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_PutTag
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * Tag text.
     *
     * {"type":"string"}
     */
    public function _tagged_name(string $tagged_name) : Video_PutTag
    {
        $this->params['tagged_name'] = $tagged_name;
        return $this;
    }
}