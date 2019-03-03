<?php

namespace VkApigen\Method;

/**
 * Hides all replies in the last 24 hours from the user to current user's stories.
 */
class Stories_HideAllReplies extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.hideAllReplies');
    }
    /**
     * ID of the user whose replies should be hidden.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Stories_HideAllReplies
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}