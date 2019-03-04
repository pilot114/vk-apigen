<?php

namespace VkApigen\Method\Market;

/**
 * Restores recently deleted item
 */
class Restore extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Deleted item ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : self
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}