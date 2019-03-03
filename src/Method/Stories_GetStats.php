<?php

namespace VkApigen\Method;

/**
 * Returns stories available for current user.
 */
class Stories_GetStats extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.getStats');
    }
    /**
     * Story owner ID. 
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Stories_GetStats
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Story ID.
     *
     * {"type":"int","minimum":0}
     */
    public function story_id(int $story_id) : Stories_GetStats
    {
        $this->params['story_id'] = $story_id;
        return $this;
    }
}