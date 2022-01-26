<?php

namespace VkApigen\Method\Video;

/**
 * Reorders the album in the list of user video albums.
 */
class ReorderAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('video.reorderAlbums');
    }
    /**
     * ID of the user or community that owns the albums..
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
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
    /**
     * ID of the album before which the album in question shall be placed.
     *
     * {"type":"int","minimum":0}
     */
    public function _before(int $before) : self
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the album after which the album in question shall be placed.
     *
     * {"type":"int","minimum":0}
     */
    public function _after(int $after) : self
    {
        $this->params['after'] = $after;
        return $this;
    }
}