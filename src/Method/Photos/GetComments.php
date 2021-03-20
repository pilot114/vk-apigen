<?php

namespace VkApigen\Method\Photos;

/**
 * Returns a list of comments on a photo.
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
        return $this->onCall('photos.getComments');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"int"}
     */
    public function photo_id(int $photo_id) : self
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field, '0' — (default)
     *
     * {"type":"bool"}
     */
    public function _need_likes(bool $need_likes) : self
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _start_comment_id(int $start_comment_id) : self
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments. By default, '0'.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"int","default":"20","minimum":0,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order: 'asc' — old first, 'desc' — new first
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["old first","new first"]}
     */
    public function _sort(string $sort) : self
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : self
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
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