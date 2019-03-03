<?php

namespace VkApigen\Method;

/**
 * Creates friends list for requests and invites in current app.
 */
class Apps_GetFriendsList extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getFriendsList');
    }
    /**
     * List size.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":5000}
     */
    public function _count(int $count) : Apps_GetFriendsList
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * List type. Possible values: * 'invite' — available for invites (don't play the game),, * 'request' — available for request (play the game). By default: 'invite'.
     *
     * {"type":"string","default":"invite","enum":["request","invite"]}
     */
    public function _type(string $type) : Apps_GetFriendsList
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Additional profile fields, see [vk.com/dev/fields|description].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Apps_GetFriendsList
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}