<?php

namespace VkApigen\Method\Account;

/**
 * Returns non-null values of user counters.
 */
class GetCounters extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
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
    public function _filter(array $filter) : self
    {
        $this->params['filter'] = $filter;
        return $this;
    }
}