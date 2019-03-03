<?php

namespace VkApigen\Method;

/**
 * Chages item comment's text
 */
class Market_EditComment extends \VkApigen\BaseMethod
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
        return $this->onCall('market.editComment');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_EditComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : Market_EditComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * New comment text (required if 'attachments' are not specified), , 2048 symbols maximum.
     *
     * {"type":"string","maxLength":2048}
     */
    public function _message(string $message) : Market_EditComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Comma-separated list of objects attached to a comment. The field is submitted the following way: , "'<owner_id>_<media_id>,<owner_id>_<media_id>'", , '' - media attachment type: "'photo' - photo, 'video' - video, 'audio' - audio, 'doc' - document", , '<owner_id>' - media owner id, '<media_id>' - media attachment id, , For example: "photo100172_166443618,photo66748_265827614",
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Market_EditComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
}