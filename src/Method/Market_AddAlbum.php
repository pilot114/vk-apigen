<?php

namespace VkApigen\Method;

/**
 * Creates new collection of items
 */
class Market_AddAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('market.addAlbum');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_AddAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection title.
     *
     * {"type":"string","maxLength":128}
     */
    public function title(string $title) : Market_AddAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _photo_id(int $photo_id) : Market_AddAlbum
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Set as main ('1' – set, '0' – no).
     *
     * {"type":"bool"}
     */
    public function _main_album(bool $main_album) : Market_AddAlbum
    {
        $this->params['main_album'] = $main_album;
        return $this;
    }
}