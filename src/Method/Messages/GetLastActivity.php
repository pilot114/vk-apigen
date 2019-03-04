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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('messages.getLastActivity');
    }
    /**
     * User ID.
     *
     * {"type":"int"}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}