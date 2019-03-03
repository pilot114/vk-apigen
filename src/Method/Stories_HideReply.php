<?php

namespace VkApigen\Method;

/**
 * Hides the reply to the current user's story.
 */
class Stories_HideReply extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.hideReply');
    }
    /**
     * ID of the user whose replies should be hidden.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Stories_HideReply
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Story ID.
     *
     * {"type":"int"}
     */
    public function story_id(int $story_id) : Stories_HideReply
    {
        $this->params['story_id'] = $story_id;
        return $this;
    }
    /**
     * Access key for the private object.
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Stories_HideReply
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
}