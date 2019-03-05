<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Returns communities and users that current user is suggested to follow.
 */
class GetSuggestedSources extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('newsfeed.getSuggestedSources');
    }
    /**
     * offset required to choose a particular subset of communities or users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * amount of communities or users to return.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":20}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * shuffle the returned list or not.
     *
     * {"type":"bool"}
     */
    public function _shuffle(bool $shuffle) : self
    {
        $this->params['shuffle'] = $shuffle;
        return $this;
    }
    /**
     * list of extra fields to be returned. See available fields for [vk.com/dev/fields|users] and [vk.com/dev/fields_groups|communities].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}