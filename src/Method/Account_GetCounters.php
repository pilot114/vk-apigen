<?php

namespace VkApigen\Method;

/**
 * Returns non-null values of user counters.
 */
class Account_GetCounters extends \VkApigen\BaseMethod
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
        return $this->onCall('account.getCounters');
    }
    /**
     * Counters to be returned.
     *
     * {"type":"array","items":{"type":"string","enum":["friends","messages","photos","videos","notes","gifts","events","groups","sdk","friends_suggestions"]}}
     */
    public function _filter(array $filter) : Account_GetCounters
    {
        $this->params['filter'] = $filter;
        return $this;
    }
}