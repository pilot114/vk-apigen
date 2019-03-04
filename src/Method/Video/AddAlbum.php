<?php

namespace VkApigen\Method\Video;

/**
 * Creates an empty album for videos.
 */
class AddAlbum extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Album title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : self
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