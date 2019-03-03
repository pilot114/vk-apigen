<?php

namespace VkApigen\Method;

/**
 * Creates new session for the user passing the offer.
 */
class Leads_Start extends \VkApigen\BaseMethod
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
        return $this->onCall('leads.start');
    }
    /**
     * Lead ID.
     *
     * {"type":"int","minimum":0}
     */
    public function lead_id(int $lead_id) : Leads_Start
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Secret key from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : Leads_Start
    {
        $this->params['secret'] = $secret;
        return $this;
    }
}