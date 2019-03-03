<?php

namespace VkApigen\Method;

/**
 * Returns community's collections list.
 */
class Market_GetAlbums extends \VkApigen\BaseMethod
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
        return $this->onCall('market.getAlbums');
    }
    /**
     * ID of an items owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_GetAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Market_GetAlbums
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"int","minimum":0,"default":50,"maximum":100}
     */
    public function _count(int $count) : Market_GetAlbums
    {
        $this->params['count'] = $count;
        return $this;
    }
}