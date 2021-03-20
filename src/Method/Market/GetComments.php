<?php

namespace VkApigen\Method\Market;

/**
 * Returns comments list for an item.
 */
class GetComments extends \VkApigen\BaseMethod
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
        return $this->onCall('market.getComments');
    }
    /**
     * ID of an item owner community
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : self
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * '1' — to return likes info.
     *
     * {"type":"bool"}
     */
    public function _need_likes(bool $need_likes) : self
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * ID of a comment to start a list from (details below).
     *
     * {"type":"int","minimum":0}
     */
    public function _start_comment_id(int $start_comment_id) : self
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order ('asc' — from old to new, 'desc' — from new to old)
     *
     * {"type":"string","default":"asc","enum":["asc","desc"],"enumNames":["old to new","new to old"]}
     */
    public function _sort(string $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * '1' — comments will be returned as numbered objects, in addition lists of 'profiles' and 'groups' objects will be returned.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * List of additional profile fields to return. See the [vk.com/dev/fields|details]
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}