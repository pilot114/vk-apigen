<?php

namespace VkApigen\Method\Photos;

/**
 * Returns a list of a user's or community's photos.
 */
class Get extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'service']);
    }
    public function call()
    {
        return $this->onCall('photos.get');
    }
    /**
     * ID of the user or community that owns the photos. Use a negative value to designate a community ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo album ID. To return information about photos from service albums, use the following string values: 'profile, wall, saved'.
     *
     * {"type":"string"}
     */
    public function _album_id(string $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * Photo IDs.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _photo_ids(array $photo_ids) : self
    {
        $this->params['photo_ids'] = $photo_ids;
        return $this;
    }
    /**
     * Sort order: '1' — reverse chronological, '0' — chronological
     *
     * {"type":"bool"}
     */
    public function _rev(bool $rev) : self
    {
        $this->params['rev'] = $rev;
        return $this;
    }
    /**
     * '1' — to return additional 'likes', 'comments', and 'tags' fields, '0' — (default)
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Type of feed obtained in 'feed' field of the method.
     *
     * {"type":"string"}
     */
    public function _feed_type(string $feed_type) : self
    {
        $this->params['feed_type'] = $feed_type;
        return $this;
    }
    /**
     * unixtime, that can be obtained with [vk.com/dev/newsfeed.get|newsfeed.get] method in date field to get all photos uploaded by the user on a specific day, or photos the user has been tagged on. Also, 'uid' parameter of the user the event happened with shall be specified.
     *
     * {"type":"int"}
     */
    public function _feed(int $feed) : self
    {
        $this->params['feed'] = $feed;
        return $this;
    }
    /**
     * '1' — to return photo sizes in a [vk.com/dev/photo_sizes|special format]
     *
     * {"type":"bool"}
     */
    public function _photo_sizes(bool $photo_sizes) : self
    {
        $this->params['photo_sizes'] = $photo_sizes;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":50,"minimum":0,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}