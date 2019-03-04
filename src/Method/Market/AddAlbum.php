<?php

namespace VkApigen\Method\Market;

/**
 * Creates new collection of items
 */
class AddAlbum extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection title.
     *
     * {"type":"string","maxLength":128}
     */
    public function title(string $title) : self
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Cover photo ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _photo_id(int $photo_id) : self
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Set as main ('1' – set, '0' – no).
     *
     * {"type":"bool"}
     */
    public function _main_album(bool $main_album) : self
    {
        $this->params['main_album'] = $main_album;
        return $this;
    }
}