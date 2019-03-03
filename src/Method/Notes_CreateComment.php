<?php

namespace VkApigen\Method;

/**
 * Adds a new comment on a note.
 */
class Notes_CreateComment extends \VkApigen\BaseMethod
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
        return $this->onCall('notes.createComment');
    }
    /**
     * Note ID.
     *
     * {"type":"int","minimum":0}
     */
    public function note_id(int $note_id) : Notes_CreateComment
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : Notes_CreateComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the user to whom the reply is addressed (if the comment is a reply to another comment).
     *
     * {"type":"int","minimum":0}
     */
    public function _reply_to(int $reply_to) : Notes_CreateComment
    {
        $this->params['reply_to'] = $reply_to;
        return $this;
    }
    /**
     * Comment text.
     *
     * {"type":"string"}
     */
    public function message(string $message) : Notes_CreateComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : Notes_CreateComment
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}