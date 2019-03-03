<?php

namespace VkApigen\Method;

/**
 * Restores recently deleted item
 */
class Market_Restore extends \VkApigen\BaseMethod
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
        return $this->onCall('market.restore');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_Restore
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Deleted item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Market_Restore
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}