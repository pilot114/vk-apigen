<?php

namespace VkApigen\Method\Market;

/**
 * Returns items list for a community.
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
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('market.get');
    }
    /**
     * ID of an item owner community, "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * {"type":"int","format":"int32"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int32","default":0,"minimum":0}
     */
    public function _album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"int","default":100,"minimum":0,"maximum":200}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * '1' - method will return additional fields: 'likes, can_comment, car_repost, photos'. These parameters are not returned by default.
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Items update date from (format: yyyy-mm-dd)
     *
     * {"type":"string"}
     */
    public function _date_from(string $date_from) : self
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * Items update date to (format: yyyy-mm-dd)
     *
     * {"type":"string"}
     */
    public function _date_to(string $date_to) : self
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
    /**
     * Add variants to response if exist
     *
     * {"type":"bool"}
     */
    public function _need_variants(bool $need_variants) : self
    {
        $this->params['need_variants'] = $need_variants;
        return $this;
    }
    /**
     * Add disabled items to response
     *
     * {"type":"bool"}
     */
    public function _with_disabled(bool $with_disabled) : self
    {
        $this->params['with_disabled'] = $with_disabled;
        return $this;
    }
}