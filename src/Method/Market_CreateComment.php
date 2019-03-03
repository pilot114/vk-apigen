<?php

namespace VkApigen\Method;

/**
 * Creates a new comment for an item.
 */
class Market_CreateComment extends \VkApigen\BaseMethod
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
        return $this->onCall('market.createComment');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_CreateComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Market_CreateComment
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Comment text (required if 'attachments' parameter is not specified)
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Market_CreateComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Comma-separated list of objects attached to a comment. The field is submitted the following way: , "'<owner_id>_<media_id>,<owner_id>_<media_id>'", , '' - media attachment type: "'photo' - photo, 'video' - video, 'audio' - audio, 'doc' - document", , '<owner_id>' - media owner id, '<media_id>' - media attachment id, , For example: "photo100172_166443618,photo66748_265827614",
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Market_CreateComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * '1' - comment will be published on behalf of a community, '0' - on behalf of a user (by default).
     *
     * {"type":"bool"}
     */
    public function _from_group(bool $from_group) : Market_CreateComment
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * ID of a comment to reply with current comment to.
     *
     * {"type":"int","minimum":0}
     */
    public function _reply_to_comment(int $reply_to_comment) : Market_CreateComment
    {
        $this->params['reply_to_comment'] = $reply_to_comment;
        return $this;
    }
    /**
     * Sticker ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : Market_CreateComment
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * Random value to avoid resending one comment.
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : Market_CreateComment
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}