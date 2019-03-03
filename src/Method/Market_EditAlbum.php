<?php

namespace VkApigen\Method;

/**
 * Edits a collection of items
 */
class Market_EditAlbum extends \VkApigen\BaseMethod
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
        return $this->onCall('market.editAlbum');
    }
    /**
     * ID of an collection owner community.
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Market_EditAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"int","minimum":0}
     */
    public function album_id(int $album_id) : Market_EditAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * Collection title.
     *
     * {"type":"string","maxLength":128}
     */
    public function title(string $title) : Market_EditAlbum
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Cover photo id
     *
     * {"type":"int","minimum":0}
     */
    public function _photo_id(int $photo_id) : Market_EditAlbum
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Set as main ('1' – set, '0' – no).
     *
     * {"type":"bool"}
     */
    public function _main_album(bool $main_album) : Market_EditAlbum
    {
        $this->params['main_album'] = $main_album;
        return $this;
    }
}