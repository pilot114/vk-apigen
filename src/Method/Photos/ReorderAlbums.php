<?php

namespace VkApigen\Method\Photos;

/**
 * Reorders the album in the list of user albums.
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
        return $this->onCall('photos.reorderAlbums');
    }
    /**
     * ID of the user or community that owns the album.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int"}
     */
    public function album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the album before which the album in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _before(int $before) : self
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of the album after which the album in question shall be placed.
     *
     * {"type":"int"}
     */
    public function _after(int $after) : self
    {
        $this->params['after'] = $after;
        return $this;
    }
}