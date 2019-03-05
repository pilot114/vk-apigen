<?php

namespace VkApigen\Method\Board;

/**
 * Adds a comment on a topic on a community's discussion board.
 */
class CreateComment extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('board.createComment');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * ID of the topic to be commented on.
     *
     * {"type":"int","minimum":0}
     */
    public function topic_id(int $topic_id) : self
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the comment.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : self
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * (Required if 'text' is not set.) List of media objects attached to the comment, in the following format: "<owner_id>_<media_id>,<owner_id>_<media_id>", '' — Type of media object: 'photo' — photo, 'video' — video, 'audio' — audio, 'doc' — document, '<owner_id>' — ID of the media owner. '<media_id>' — Media ID.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : self
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * '1' — to post the comment as by the community, '0' — to post the comment as by the user (default)
     *
     * {"type":"bool"}
     */
    public function _from_group(bool $from_group) : self
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * Sticker ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : self
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * Unique identifier to avoid repeated comments.
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : self
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}