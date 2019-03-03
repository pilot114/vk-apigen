<?php

namespace VkApigen\Method;

/**
 * Unsubscribes the current user from specified newsfeeds.
 */
class Newsfeed_Unsubscribe extends \VkApigen\BaseMethod
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
        return $this->onCall('newsfeed.unsubscribe');
    }
    /**
     * Type of object from which to unsubscribe: 'note' — note, 'photo' — photo, 'post' — post on user wall or community wall, 'topic' — topic, 'video' — video
     *
     * {"type":"string","enum":["note","photo","post","topic","video"]}
     */
    public function type(string $type) : Newsfeed_Unsubscribe
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Object owner ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Newsfeed_Unsubscribe
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Object ID.
     *
     * {"type":"int","minimum":0}
     */
    public function item_id(int $item_id) : Newsfeed_Unsubscribe
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
}