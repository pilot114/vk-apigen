<?php

namespace VkApigen\Method\Stories;

/**
 * Allows to delete story.
 */
class Delete extends \VkApigen\BaseMethod
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
        return $this->onCall('stories.delete');
    }
    /**
     * Story owner's ID. Current user id is used by default.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Story ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _story_id(int $story_id) : self
    {
        $this->params['story_id'] = $story_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function _stories(array $stories) : self
    {
        $this->params['stories'] = $stories;
        return $this;
    }
}