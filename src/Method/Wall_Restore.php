<?php

namespace VkApigen\Method;

/**
 * Restores a post deleted from a user wall or community wall.
 */
class Wall_Restore extends \VkApigen\BaseMethod
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
        return $this->onCall('wall.restore');
    }
    /**
     * User ID or community ID from whose wall the post was deleted. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_Restore
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the post to be restored.
     *
     * {"type":"int","minimum":0}
     */
    public function _post_id(int $post_id) : Wall_Restore
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
}