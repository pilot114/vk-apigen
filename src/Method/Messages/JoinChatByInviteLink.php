<?php

namespace VkApigen\Method\Messages;

/**
 * Нет описания
 */
class JoinChatByInviteLink extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.joinChatByInviteLink');
    }
    /**
     * Invitation link.
     *
     * {"type":"string"}
     */
    public function link(string $link) : self
    {
        $this->params['link'] = $link;
        return $this;
    }
}