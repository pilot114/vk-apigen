<?php

namespace VkApigen\Method\Orders;

/**
 * Нет описания
 */
class GetUserSubscriptionById extends \VkApigen\BaseMethod
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
        return $this->onCall('orders.getUserSubscriptionById');
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
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function subscription_id(int $subscription_id) : self
    {
        $this->params['subscription_id'] = $subscription_id;
        return $this;
    }
}