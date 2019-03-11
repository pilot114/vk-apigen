<?php

namespace VkApigen\Method\Orders;

/**
 * Нет описания
 */
class GetAmount extends \VkApigen\BaseMethod
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
        return 1;
    }
    public function call()
    {
        return $this->onCall('orders.getAmount');
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
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function votes(array $votes) : self
    {
        $this->params['votes'] = $votes;
        return $this;
    }
}