<?php

namespace VkApigen\Method;

/**
 * Hides an item from the newsfeed.
 */
class Newsfeed_IgnoreItem extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.ignoreItem');
    }
    /**
     * Item type. Possible values: *'wall' – post on the wall,, *'tag' – tag on a photo,, *'profilephoto' – profile photo,, *'video' – video,, *'audio' – audio.
     *
     * {"type":"string","enum":["wall","tag","profilephoto","video","audio"],"enumNames":["post on the wall","tag on a photo","profile photo","video","audio"]}
     */
    public function type(string $type) : Newsfeed_IgnoreItem
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Item owner's identifier (user or community), "Note that community id must be negative. 'owner_id=1' – user , 'owner_id=-1' – community "
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Newsfeed_IgnoreItem
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item identifier
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Newsfeed_IgnoreItem
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}