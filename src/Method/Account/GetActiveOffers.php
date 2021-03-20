<?php

namespace VkApigen\Method\Account;

/**
 * Returns a list of active ads (offers) which executed by the user will bring him/her respective number of votes to his balance in the application.
 */
class GetActiveOffers extends \VkApigen\BaseMethod
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
        return $this->onCall('account.getActiveOffers');
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","default":100,"minimum":0,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}