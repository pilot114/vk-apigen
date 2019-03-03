<?php

namespace VkApigen\Method;

/**
 * Adds a new comment on the photo.
 */
class Photos_CreateComment extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.createComment');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Photos_CreateComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : Photos_CreateComment
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Comment text.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Photos_CreateComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — Media attachment owner ID. '<media_id>' — Media attachment ID. Example: "photo100172_166443618,photo66748_265827614"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Photos_CreateComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * '1' — to post a comment from the community
     *
     * {"type":"bool"}
     */
    public function _from_group(bool $from_group) : Photos_CreateComment
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int"}
     */
    public function _reply_to_comment(int $reply_to_comment) : Photos_CreateComment
    {
        $this->params['reply_to_comment'] = $reply_to_comment;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : Photos_CreateComment
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Photos_CreateComment
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : Photos_CreateComment
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}