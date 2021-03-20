<?php

namespace VkApigen\Method\Friends;

/**
 * Returns information about the current user's incoming and outgoing friend requests.
 */
class GetRequests extends \VkApigen\BaseMethod
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
        return $this->onCall('friends.getRequests');
    }
    /**
     * Offset needed to return a specific subset of friend requests.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of friend requests to return (default 100, maximum 1000).
     *
     * {"type":"int","default":100,"minimum":0,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return response messages from users who have sent a friend request or, if 'suggested' is set to '1', to return a list of suggested friends
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * '1' — to return a list of mutual friends (up to 20), if any
     *
     * {"type":"bool"}
     */
    public function _need_mutual(bool $need_mutual) : self
    {
        $this->params['need_mutual'] = $need_mutual;
        return $this;
    }
    /**
     * '1' — to return outgoing requests, '0' — to return incoming requests (default)
     *
     * {"type":"bool"}
     */
    public function _out(bool $out) : self
    {
        $this->params['out'] = $out;
        return $this;
    }
    /**
     * Sort order: '1' — by number of mutual friends, '0' — by date
     *
     * {"type":"int","minimum":0,"enum":[0,1,2],"enumNames":["date","mutual","rotate"]}
     */
    public function _sort(int $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _need_viewed(bool $need_viewed) : self
    {
        $this->params['need_viewed'] = $need_viewed;
        return $this;
    }
    /**
     * '1' — to return a list of suggested friends, '0' — to return friend requests (default)
     *
     * {"type":"bool"}
     */
    public function _suggested(bool $suggested) : self
    {
        $this->params['suggested'] = $suggested;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":255}
     */
    public function _ref(string $ref) : self
    {
        $this->params['ref'] = $ref;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}