<?php

namespace VkApigen\Method\Messages;

/**
 * Нет описания
 */
class GetChatPreview extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getChatPreview');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Invitation link.
     *
     * {"type":"string"}
     */
    public function _link(string $link) : self
    {
        $this->params['link'] = $link;
        return $this;
    }
    /**
     * Profile fields to return.
     *
     * {"type":"array","items":{"$ref":"objects.json#\/definitions\/users_fields"}}
     */
    public function _fields(array $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}