<?php

namespace VkApigen\Method;

/**
 * Returns a list of story viewers.
 */
class Stories_GetViewers extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.getViewers');
    }
    /**
     * Story owner ID.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Stories_GetViewers
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Story ID.
     *
     * {"type":"int","minimum":0}
     */
    public function story_id(int $story_id) : Stories_GetViewers
    {
        $this->params['story_id'] = $story_id;
        return $this;
    }
    /**
     * Maximum number of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : Stories_GetViewers
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Stories_GetViewers
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * '1' — to return detailed information about photos
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Stories_GetViewers
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}