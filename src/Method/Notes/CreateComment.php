<?php

namespace VkApigen\Method\Notes;

/**
 * Adds a new comment on a note.
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
        return $this->onCall('notes.createComment');
    }
    /**
     * Note ID.
     *
     * {"type":"int","minimum":0}
     */
    public function note_id(int $note_id) : self
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the user to whom the reply is addressed (if the comment is a reply to another comment).
     *
     * {"type":"int","minimum":0}
     */
    public function _reply_to(int $reply_to) : self
    {
        $this->params['reply_to'] = $reply_to;
        return $this;
    }
    /**
     * Comment text.
     *
     * {"type":"string"}
     */
    public function message(string $message) : self
    {
        $this->params['message'] = $message;
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