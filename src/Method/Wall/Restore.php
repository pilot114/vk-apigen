<?php

namespace VkApigen\Method\Wall;

/**
 * Restores a post deleted from a user wall or community wall.
 */
class Restore extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('wall.restore');
    }
    /**
     * User ID or community ID from whose wall the post was deleted. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the post to be restored.
     *
     * {"type":"int","minimum":0}
     */
    public function _post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}