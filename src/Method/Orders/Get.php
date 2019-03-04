<?php

namespace VkApigen\Method\Orders;

/**
 * Returns a list of orders.
 */
class Get extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('orders.get');
    }
    /**
     * number of returned orders.
     *
     * {"type":"int","minimum":0,"maximum":1000,"default":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
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