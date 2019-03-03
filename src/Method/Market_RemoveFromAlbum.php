<?php

namespace VkApigen\Method;

/**
 * Removes an item from one or multiple collections.
 */
class Market_RemoveFromAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('market.removeFromAlbum');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_RemoveFromAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Market_RemoveFromAlbum
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Collections IDs to remove item from.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function album_ids(array $album_ids) : Market_RemoveFromAlbum
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
}