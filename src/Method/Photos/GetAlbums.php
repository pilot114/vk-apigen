<?php

namespace VkApigen\Method\Photos;

/**
 * Returns a list of a user's or community's photo albums.
 */
class GetAlbums extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('photos.getAlbums');
    }
    /**
     * ID of the user or community that owns the albums.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album IDs.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _album_ids(array $album_ids) : self
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of albums.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of albums to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return system albums with negative IDs
     *
     * {"type":"bool"}
     */
    public function _need_system(bool $need_system) : self
    {
        $this->params['need_system'] = $need_system;
        return $this;
    }
    /**
     * '1' — to return an additional 'thumb_src' field, '0' — (default)
     *
     * {"type":"bool"}
     */
    public function _need_covers(bool $need_covers) : self
    {
        $this->params['need_covers'] = $need_covers;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : self
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
}