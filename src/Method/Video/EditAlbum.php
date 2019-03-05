<?php

namespace VkApigen\Method\Video;

/**
 * Edits the title of a video album.
 */
class EditAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('video.editAlbum');
    }
    /**
     * Community ID (if the album edited is owned by a community).
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
    /**
     * New album title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * new access permissions for the album. Possible values: , *'0' – all users,, *'1' – friends only,, *'2' – friends and friends of friends,, *'3' – "only me".
     *
     * {"type":"array","items":{"type":"string","enum":["0","1","2","3"],"enumNames":["all","friends","friends of friends","only me"]}}
     */
    public function _privacy(array $privacy) : self
    {
        $this->params['privacy'] = $privacy;
        return $this;
    }
}