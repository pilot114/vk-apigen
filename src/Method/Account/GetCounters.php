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
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
    }
    public function call()
    {
        return $this->onCall('account.getCounters');
    }
    /**
     * Counters to be returned.
     *
     * {"type":"array","items":{"type":"string","enum":["friends","messages","photos","notes","gifts","events","groups","sdk","friends_suggestions","notifications","app_requests","friends_recommendations"]}}
     */
    public function _filter(array $filter) : self
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * User ID
     *
     * {"type":"int","format":"int64","minimum":0,"entity":"owner"}
     */
    public function _user_id(int $user_id) : self
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}