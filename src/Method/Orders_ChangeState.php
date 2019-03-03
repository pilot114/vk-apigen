<?php

namespace VkApigen\Method;

/**
 * Changes order status.
 */
class Orders_ChangeState extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
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
    public function order_id(int $order_id) : Orders_ChangeState
    {
        $this->params['order_id'] = $order_id;
        return $this;
    }
    /**
     * action to be done with the order. Available actions: *cancel — to cancel unconfirmed order. *charge — to confirm unconfirmed order. Applies only if processing of [vk.com/dev/payments_status|order_change_state] notification failed. *refund — to cancel confirmed order.
     *
     * {"type":"string","enum":["cancel","charge","refund"]}
     */
    public function action(string $action) : Orders_ChangeState
    {
        $this->params['action'] = $action;
        return $this;
    }
    /**
     * internal ID of the order in the application.
     *
     * {"type":"int","minimum":0}
     */
    public function _app_order_id(int $app_order_id) : Orders_ChangeState
    {
        $this->params['app_order_id'] = $app_order_id;
        return $this;
    }
    /**
     * if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
     *
     * {"type":"bool"}
     */
    public function _test_mode(bool $test_mode) : Orders_ChangeState
    {
        $this->params['test_mode'] = $test_mode;
        return $this;
    }
}