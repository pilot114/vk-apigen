<?php

namespace VkApigen\Method;

/**
 * Creates an empty album for videos.
 */
class Video_AddAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('video.addAlbum');
    }
    /**
     * Community ID (if the album will be created in a community).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Video_AddAlbum
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Video_AddAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * new access permissions for the album. Possible values: , *'0' – all users,, *'1' – friends only,, *'2' – friends and friends of friends,, *'3' – "only me".
     *
     * {"type":"array","items":{"type":"string","enum":["0","1","2","3"],"enumNames":["all","friends","friends of friends","only me"]}}
     */
    public function _privacy(array $privacy) : Video_AddAlbum
    {
        $this->params['privacy'] = $privacy;
        return $this;
    }
}