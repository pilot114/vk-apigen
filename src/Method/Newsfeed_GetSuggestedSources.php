<?php

namespace VkApigen\Method;

/**
 * Returns communities and users that current user is suggested to follow.
 */
class Newsfeed_GetSuggestedSources extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.getSuggestedSources');
    }
    /**
     * offset required to choose a particular subset of communities or users.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Newsfeed_GetSuggestedSources
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * amount of communities or users to return.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":20}
     */
    public function _count(int $count) : Newsfeed_GetSuggestedSources
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * shuffle the returned list or not.
     *
     * {"type":"bool"}
     */
    public function _shuffle(bool $shuffle) : Newsfeed_GetSuggestedSources
    {
        $this->params['shuffle'] = $shuffle;
        return $this;
    }
    /**
     * list of extra fields to be returned. See available fields for [vk.com/dev/fields|users] and [vk.com/dev/fields_groups|communities].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Newsfeed_GetSuggestedSources
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}