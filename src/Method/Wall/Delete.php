<?php

namespace VkApigen\Method\Wall;

/**
 * Deletes a post from a user wall or community wall.
 */
class Delete extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('wall.delete');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the post to be deleted.
     *
     * {"type":"int","minimum":0}
     */
    public function _post_id(int $post_id) : self
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}