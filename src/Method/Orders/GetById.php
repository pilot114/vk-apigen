<?php

namespace VkApigen\Method\Orders;

/**
 * Returns information about orders by their IDs.
 */
class GetById extends \VkApigen\BaseMethod
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
        return $this->onCall('orders.getById');
    }
    /**
     * order ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _order_id(int $order_id) : self
    {
        $this->params['order_id'] = $order_id;
        return $this;
    }
    /**
     * order IDs (when information about several orders is requested).
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _order_ids(array $order_ids) : self
    {
        $this->params['order_ids'] = $order_ids;
        return $this;
    }
    /**
     * if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
     *
     * {"type":"bool"}
     */
    public function _test_mode(bool $test_mode) : self
    {
        $this->params['test_mode'] = $test_mode;
        return $this;
    }
}