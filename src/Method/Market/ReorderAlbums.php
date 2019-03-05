<?php

namespace VkApigen\Method\Market;

/**
 * Reorders the collections list.
 */
class ReorderAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('market.reorderAlbums');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"int"}
     */
    public function album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of a collection to place current collection before it.
     *
     * {"type":"int","minimum":0}
     */
    public function _before(int $before) : self
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of a collection to place current collection after it.
     *
     * {"type":"int","minimum":0}
     */
    public function _after(int $after) : self
    {
        $this->params['after'] = $after;
        return $this;
    }
}