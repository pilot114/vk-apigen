<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Returns a hidden item to the newsfeed.
 */
class UnignoreItem extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('newsfeed.unignoreItem');
    }
    /**
     * Item type. Possible values: *'wall' – post on the wall,, *'tag' – tag on a photo,, *'profilephoto' – profile photo,, *'video' – video,, *'audio' – audio.
     *
     * {"type":"string","enum":["wall","tag","profilephoto","video","audio"]}
     */
    public function type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Item owner's identifier (user or community), "Note that community id must be negative. 'owner_id=1' – user , 'owner_id=-1' – community "
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item identifier
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : self
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}