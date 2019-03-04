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
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.getActiveOffers');
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":100}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}