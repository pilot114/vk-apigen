<?php

namespace VkApigen\Method\Orders;

/**
 * Нет описания
 */
class GetUserSubscriptions extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['service']);
    }
    public function call()
    {
        return $this->onCall('orders.getUserSubscriptions');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}