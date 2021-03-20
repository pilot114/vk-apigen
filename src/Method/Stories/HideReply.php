<?php

namespace VkApigen\Method\Stories;

/**
 * Hides the reply to the current user's story.
 */
class HideReply extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user', 'group']);
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
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Story ID.
     *
     * {"type":"int","minimum":0}
     */
    public function story_id(int $story_id) : self
    {
        $this->params['story_id'] = $story_id;
        return $this;
    }
}