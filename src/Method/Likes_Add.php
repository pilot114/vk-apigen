<?php

namespace VkApigen\Method;

/**
 * Adds the specified object to the 'Likes' list of the current user.
 */
class Likes_Add extends \VkApigen\BaseMethod
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
        return $this->onCall('likes.add');
    }
    /**
     * Object type: 'post' — post on user or community wall, 'comment' — comment on a wall post, 'photo' — photo, 'audio' — audio, 'video' — video, 'note' — note, 'photo_comment' — comment on the photo, 'video_comment' — comment on the video, 'topic_comment' — comment in the discussion, 'sitepage' — page of the site where the [vk.com/dev/Like|Like widget] is installed
     *
     * {"type":"string","enum":["post","comment","photo","audio","video","note","photo_comment","video_comment","topic_comment","sitepage"]}
     */
    public function type(string $type) : Likes_Add
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * ID of the user or community that owns the object.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Likes_Add
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Object ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Likes_Add
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Access key required for an object owned by a private entity.
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Likes_Add
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
}