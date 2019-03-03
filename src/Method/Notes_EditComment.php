<?php

namespace VkApigen\Method;

/**
 * Edits a comment on a note.
 */
class Notes_EditComment extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.editComment');
    }
    /**
     * Comment ID.
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : Notes_EditComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : Notes_EditComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * New comment text.
     *
     * {"type":"string","minLength":2}
     */
    public function _message(string $message) : Notes_EditComment
    {
        $this->params['message'] = $message;
        return $this;
    }
}