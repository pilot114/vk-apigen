<?php

namespace VkApigen\Method\Board;

/**
 * Deletes a comment on a topic on a community's discussion board.
 */
class DeleteComment extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('board.deleteComment');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"int","minimum":1}
     */
    public function topic_id(int $topic_id) : self
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int","minimum":1}
     */
    public function comment_id(int $comment_id) : self
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}