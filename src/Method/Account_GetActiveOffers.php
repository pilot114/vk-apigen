<?php

namespace VkApigen\Method;

/**
 * Returns a list of active ads (offers) which executed by the user will bring him/her respective number of votes to his balance in the application.
 */
class Account_GetActiveOffers extends \VkApigen\BaseMethod
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
        return $this->onCall('account.getActiveOffers');
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":100}
     */
    public function _count(int $count) : Account_GetActiveOffers
    {
        $this->params['count'] = $count;
        return $this;
    }
}