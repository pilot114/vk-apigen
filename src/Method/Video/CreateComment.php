<?php

namespace VkApigen\Method\Video;

/**
 * Adds a new comment on a video.
 */
class CreateComment extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"int"}
     */
    public function video_id(int $video_id) : self
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * New comment text.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * List of objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media attachment owner. '<media_id>' — Media attachment ID. Example: "photo100172_166443618,photo66748_265827614"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : self
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * '1' — to post the comment from a community name (only if 'owner_id'<0)
     *
     * {"type":"bool"}
     */
    public function _from_group(bool $from_group) : self
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _reply_to_comment(int $reply_to_comment) : self
    {
        $this->params['reply_to_comment'] = $reply_to_comment;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : self
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : self
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}