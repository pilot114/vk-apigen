<?php

namespace VkApigen\Method\Photos;

/**
 * Makes a photo into an album cover.
 */
class MakeCover extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.makeCover');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : self
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}