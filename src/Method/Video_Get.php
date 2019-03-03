<?php

namespace VkApigen\Method;

/**
 * Returns detailed information about videos.
 */
class Video_Get extends \VkApigen\BaseMethod
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
        return $this->onCall('video.get');
    }
    /**
     * ID of the user or community that owns the video(s).
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video IDs, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", Use a negative value to designate a community ID. Example: "-4363_136089719,13245770_137352259"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _videos(array $videos) : Video_Get
    {
        $this->params['videos'] = $videos;
        return $this;
    }
    /**
     * ID of the album containing the video(s).
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : Video_Get
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"int","minimum":0,"maximum":200,"default":100}
     */
    public function _count(int $count) : Video_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Video_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * '1' — to return an extended response with additional fields
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Video_Get
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}