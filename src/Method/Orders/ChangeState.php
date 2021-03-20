<?php

namespace VkApigen\Method\Orders;

/**
 * Changes order status.
 */
class ChangeState extends \VkApigen\BaseMethod
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
        return $this->onCall('orders.changeState');
    }
    /**
     * order ID.
     *
     * {"type":"int","minimum":0}
     */
    public function order_id(int $order_id) : self
    {
        $this->params['order_id'] = $order_id;
        return $this;
    }
    /**
     * action to be done with the order. Available actions: *cancel — to cancel unconfirmed order. *charge — to confirm unconfirmed order. Applies only if processing of [vk.com/dev/payments_status|order_change_state] notification failed. *refund — to cancel confirmed order.
     *
     * {"type":"string","enum":["cancel","charge","refund"]}
     */
    public function action(string $action) : self
    {
        $this->params['action'] = $action;
        return $this;
    }
    /**
     * internal ID of the order in the application.
     *
     * {"type":"int","minimum":0}
     */
    public function _app_order_id(int $app_order_id) : self
    {
        $this->params['app_order_id'] = $app_order_id;
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