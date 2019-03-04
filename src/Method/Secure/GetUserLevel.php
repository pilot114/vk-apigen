<?php

namespace VkApigen\Method\Secure;

/**
 * Returns one of the previously set game levels of one or more users in the application.
 */
class GetUserLevel extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('secure.getUserLevel');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function user_ids(array $user_ids) : self
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
}