<?php

namespace VkApigen\Method;

/**
 * Returns current budget of the advertising account.
 */
class Ads_GetBudget extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getBudget');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_GetBudget
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}