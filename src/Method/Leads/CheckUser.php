<?php

namespace VkApigen\Method\Leads;

/**
 * Checks if the user can start the lead.
 */
class CheckUser extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('leads.checkUser');
    }
    /**
     * Lead ID.
     *
     * {"type":"int","minimum":0}
     */
    public function lead_id(int $lead_id) : self
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Value to be return in 'result' field when test mode is used.
     *
     * {"type":"int","minimum":0}
     */
    public function _test_result(int $test_result) : self
    {
        $this->params['test_result'] = $test_result;
        return $this;
    }
    /**
     * User age.
     *
     * {"type":"int","minimum":0}
     */
    public function _age(int $age) : self
    {
        $this->params['age'] = $age;
        return $this;
    }
    /**
     * User country code.
     *
     * {"type":"string"}
     */
    public function _country(string $country) : self
    {
        $this->params['country'] = $country;
        return $this;
    }
}