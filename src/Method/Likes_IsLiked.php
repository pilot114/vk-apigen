<?php

namespace VkApigen\Method;

/**
 * Checks for the object in the 'Likes' list of the specified user.
 */
class Likes_IsLiked extends \VkApigen\BaseMethod
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
        return $this->onCall('likes.isLiked');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _user_id(int $user_id) : Likes_IsLiked
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Object type: 'post' — post on user or community wall, 'comment' — comment on a wall post, 'photo' — photo, 'audio' — audio, 'video' — video, 'note' — note, 'photo_comment' — comment on the photo, 'video_comment' — comment on the video, 'topic_comment' — comment in the discussion
     *
     * {"type":"string","enum":["post","comment","photo","audio","video","note","photo_comment","video_comment","topic_comment"]}
     */
    public function type(string $type) : Likes_IsLiked
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * ID of the user or community that owns the object.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Likes_IsLiked
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Object ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Likes_IsLiked
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}