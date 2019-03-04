<?php

namespace VkApigen\Method\Market;

/**
 * Changes item place in a collection.
 */
class ReorderItems extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('market.reorderItems');
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
     * ID of a collection to reorder items in. Set 0 to reorder full items list.
     *
     * {"type":"int"}
     */
    public function _album_id(int $album_id) : self
    {
        $this->params['album_id'] = $album_id;
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
     * ID of an item to place current item before it.
     *
     * {"type":"int","minimum":0}
     */
    public function _before(int $before) : self
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of an item to place current item after it.
     *
     * {"type":"int","minimum":0}
     */
    public function _after(int $after) : self
    {
        $this->params['after'] = $after;
        return $this;
    }
}