<?php

namespace VkApigen\Method;

/**
 * Deletes a collection of items.
 */
class Market_DeleteAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('market.deleteAlbum');
    }
    /**
     * ID of an collection owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_DeleteAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : Market_DeleteAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}