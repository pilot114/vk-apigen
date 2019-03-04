<?php

namespace VkApigen\Method\Notes;

/**
 * Restores a deleted comment on a note.
 */
class RestoreComment extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('notes.restoreComment');
    }
    /**
     * Comment ID.
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : self
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}