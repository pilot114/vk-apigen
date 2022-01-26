<?php

namespace VkApigen\Method\Messages;

/**
 * Returns a user's current status and date of last activity.
 */
class GetLastActivity extends \VkApigen\BaseMethod
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
        return $this->onCall('messages.getLastActivity');
    }
    /**
     * User ID.
     *
     * {"type":"int","format":"int64","entity":"owner"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}