<?php

namespace VkApigen\Method\Newsfeed;

/**
 * Hides an item from the newsfeed.
 */
class IgnoreItem extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('newsfeed.ignoreItem');
    }
    /**
     * Item type. Possible values: *'wall' - post on the wall,, *'tag' - tag on a photo,, *'profilephoto' - profile photo,, *'video' - video,, *'audio' - audio.
     *
     * {"type":"string","$ref":"objects.json#\/definitions\/newsfeed_ignore_item_type"}
     */
    public function type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Item owner's identifier (user or community), "Note that community id must be negative. 'owner_id=1' - user , 'owner_id=-1' - community "
     *
     * {"type":"int","format":"int64","default":0,"entity":"owner"}
     */
    public function _owner_id(int $owner_id) : self
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item identifier
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _item_id(int $item_id) : self
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}