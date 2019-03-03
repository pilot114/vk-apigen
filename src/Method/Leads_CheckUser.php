<?php

namespace VkApigen\Method;

/**
 * Checks if the user can start the lead.
 */
class Leads_CheckUser extends \VkApigen\BaseMethod
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
        return $this->onCall('leads.checkUser');
    }
    /**
     * Lead ID.
     *
     * {"type":"int","minimum":0}
     */
    public function lead_id(int $lead_id) : Leads_CheckUser
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Value to be return in 'result' field when test mode is used.
     *
     * {"type":"int","minimum":0}
     */
    public function _test_result(int $test_result) : Leads_CheckUser
    {
        $this->params['test_result'] = $test_result;
        return $this;
    }
    /**
     * User age.
     *
     * {"type":"int","minimum":0}
     */
    public function _age(int $age) : Leads_CheckUser
    {
        $this->params['age'] = $age;
        return $this;
    }
    /**
     * User country code.
     *
     * {"type":"string"}
     */
    public function _country(string $country) : Leads_CheckUser
    {
        $this->params['country'] = $country;
        return $this;
    }
}