<?php

namespace VkApigen\Method;

/**
 * Returns the number of photo albums belonging to a user or community.
 */
class Photos_GetAlbumsCount extends \VkApigen\BaseMethod
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
        return $this->onCall('photos.getAlbumsCount');
    }
    /**
     * User ID.
     *
     * {"type":"int"}
     */
    public function _user_id(int $user_id) : Photos_GetAlbumsCount
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Photos_GetAlbumsCount
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}