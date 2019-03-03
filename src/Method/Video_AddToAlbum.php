<?php

namespace VkApigen\Method;

/**
 * not description
 */
class Video_AddToAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('video.addToAlbum');
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _target_id(int $target_id) : Video_AddToAlbum
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : Video_AddToAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _album_ids(array $album_ids) : Video_AddToAlbum
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Video_AddToAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_AddToAlbum
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}