<?php

namespace VkApigen\Method;

/**
 * Reorders the collections list.
 */
class Market_ReorderAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('market.reorderAlbums');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_ReorderAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"int"}
     */
    public function album_id(int $album_id) : Market_ReorderAlbums
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of a collection to place current collection before it.
     *
     * {"type":"int","minimum":0}
     */
    public function _before(int $before) : Market_ReorderAlbums
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of a collection to place current collection after it.
     *
     * {"type":"int","minimum":0}
     */
    public function _after(int $after) : Market_ReorderAlbums
    {
        $this->params['after'] = $after;
        return $this;
    }
}