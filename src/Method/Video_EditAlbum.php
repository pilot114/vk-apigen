<?php

namespace VkApigen\Method;

/**
 * Edits the title of a video album.
 */
class Video_EditAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('video.editAlbum');
    }
    /**
     * Community ID (if the album edited is owned by a community).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Video_EditAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album ID.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : Video_EditAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * New album title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Video_EditAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * new access permissions for the album. Possible values: , *'0' – all users,, *'1' – friends only,, *'2' – friends and friends of friends,, *'3' – "only me".
     *
     * {"type":"array","items":{"type":"string","enum":["0","1","2","3"],"enumNames":["all","friends","friends of friends","only me"]}}
     */
    public function _privacy(array $privacy) : Video_EditAlbum
    {
        $this->params['privacy'] = $privacy;
        return $this;
    }
}