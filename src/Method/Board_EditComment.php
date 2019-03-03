<?php

namespace VkApigen\Method;

/**
 * Edits a comment on a topic on a community's discussion board.
 */
class Board_EditComment extends \VkApigen\BaseMethod
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
        return $this->onCall('board.editComment');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Board_EditComment
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"int","minimum":0}
     */
    public function topic_id(int $topic_id) : Board_EditComment
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * ID of the comment on the topic.
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : Board_EditComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set). New comment text.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Board_EditComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of media objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media object: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media owner. '<media_id>' — Media ID. Example: "photo100172_166443618,photo66748_265827614"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Board_EditComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
}