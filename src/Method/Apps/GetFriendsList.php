<?php

namespace VkApigen\Method\Apps;

/**
 * Creates friends list for requests and invites in current app.
 */
class GetFriendsList extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getFriendsList');
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * List size.
     *
     * {"type":"int","default":20,"minimum":0,"maximum":5000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * List type. Possible values: * 'invite' — available for invites (don't play the game),, * 'request' — available for request (play the game). By default: 'invite'.
     *
     * {"type":"string","default":"invite","enum":["invite","request"]}
     */
    public function _type(string $type) : self
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Additional profile fields, see [vk.com/dev/fields|description].
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}