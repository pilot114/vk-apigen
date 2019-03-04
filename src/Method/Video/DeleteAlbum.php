<?php

namespace VkApigen\Method\Video;

/**
 * Deletes a video album.
 */
class DeleteAlbum extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('video.deleteAlbum');
    }
    /**
     * Community ID (if the album is owned by a community).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}