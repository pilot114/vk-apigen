<?php

namespace VkApigen\Method;

/**
 * Returns replies to the story.
 */
class Stories_GetReplies extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.getReplies');
    }
    /**
     * Story owner ID.
     *
     * {"type":"int","minimum":0}
     */
    public function owner_id(int $owner_id) : Stories_GetReplies
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Story ID.
     *
     * {"type":"int","minimum":0}
     */
    public function story_id(int $story_id) : Stories_GetReplies
    {
        $this->params['story_id'] = $story_id;
        return $this;
    }
    /**
     * Access key for the private object.
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Stories_GetReplies
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
    /**
     * '1' — to return additional fields for users and communities. Default value is 0.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : Stories_GetReplies
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Additional fields to return
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Stories_GetReplies
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}