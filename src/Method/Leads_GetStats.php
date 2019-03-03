<?php

namespace VkApigen\Method;

/**
 * Returns lead stats data.
 */
class Leads_GetStats extends \VkApigen\BaseMethod
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
        return $this->onCall('leads.getStats');
    }
    /**
     * Lead ID.
     *
     * {"type":"int","minimum":0}
     */
    public function lead_id(int $lead_id) : Leads_GetStats
    {
        $this->params['lead_id'] = $lead_id;
        return $this;
    }
    /**
     * Secret key obtained from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function _secret(string $secret) : Leads_GetStats
    {
        $this->params['secret'] = $secret;
        return $this;
    }
    /**
     * Day to start stats from (YYYY_MM_DD, e.g.2011-09-17).
     *
     * {"type":"string"}
     */
    public function _date_start(string $date_start) : Leads_GetStats
    {
        $this->params['date_start'] = $date_start;
        return $this;
    }
    /**
     * Day to finish stats (YYYY_MM_DD, e.g.2011-09-17).
     *
     * {"type":"string"}
     */
    public function _date_end(string $date_end) : Leads_GetStats
    {
        $this->params['date_end'] = $date_end;
        return $this;
    }
}