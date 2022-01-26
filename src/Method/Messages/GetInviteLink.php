<?php

namespace VkApigen\Method\Messages;

/**
 * Нет описания
 */
class GetInviteLink extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('messages.getInviteLink');
    }
    /**
     * Destination ID.
     *
     * {"type":"int","minimum":0}
     */
    public function peer_id(int $peer_id) : self
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * 1 — to generate new link (revoke previous), 0 — to return previous link.
     *
     * {"type":"bool","default":false}
     */
    public function _reset(bool $reset) : self
    {
        $this->params['reset'] = $reset;
        return $this;
    }
    /**
     * Group ID
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}