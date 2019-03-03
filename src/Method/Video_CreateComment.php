<?php

namespace VkApigen\Method;

/**
 * Adds a new comment on a video.
 */
class Video_CreateComment extends \VkApigen\BaseMethod
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
        return $this->onCall('video.createComment');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Video_CreateComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int"}
     */
    public function video_id(int $video_id) : Video_CreateComment
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * New comment text.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Video_CreateComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * List of objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media attachment owner. '<media_id>' — Media attachment ID. Example: "photo100172_166443618,photo66748_265827614"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Video_CreateComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * '1' — to post the comment from a community name (only if 'owner_id'<0)
     *
     * {"type":"bool"}
     */
    public function _from_group(bool $from_group) : Video_CreateComment
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * 
     *
     * {"type":"int","minimum":0}
     */
    public function _reply_to_comment(int $reply_to_comment) : Video_CreateComment
    {
        $this->params['reply_to_comment'] = $reply_to_comment;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : Video_CreateComment
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : Video_CreateComment
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}