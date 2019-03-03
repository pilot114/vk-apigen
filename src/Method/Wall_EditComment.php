<?php

namespace VkApigen\Method;

/**
 * Edits a comment on a user wall or community wall.
 */
class Wall_EditComment extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.editComment');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_EditComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : Wall_EditComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * New comment text.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Wall_EditComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * List of objects attached to the comment, in the following format: , "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media attachment: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media attachment owner. '<media_id>' — Media attachment ID. For example: "photo100172_166443618,photo66748_265827614"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Wall_EditComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
}