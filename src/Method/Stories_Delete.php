<?php

namespace VkApigen\Method;

/**
 * Allows to delete story.
 */
class Stories_Delete extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.delete');
    }
    /**
     * Story owner's ID. Current user id is used by default.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Stories_Delete
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Story ID.
     *
     * {"type":"int","minimum":0}
     */
    public function story_id(int $story_id) : Stories_Delete
    {
        $this->params['story_id'] = $story_id;
        return $this;
    }
}