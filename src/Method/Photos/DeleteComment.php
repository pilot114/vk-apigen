<?php

namespace VkApigen\Method\Photos;

/**
 * Deletes a comment on the photo.
 */
class DeleteComment extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('photos.deleteComment');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int"}
     */
    public function comment_id(int $comment_id) : self
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}