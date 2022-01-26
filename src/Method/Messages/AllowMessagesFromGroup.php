<?php

namespace VkApigen\Method\Messages;

/**
 * Allows sending messages from community to the current user.
 */
class AllowMessagesFromGroup extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.allowMessagesFromGroup');
    }
    /**
     * Group ID.
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","maxLength":256}
     */
    public function _key(string $key) : self
    {
        $this->params['key'] = $key;
        return $this;
    }
}