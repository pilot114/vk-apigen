<?php

namespace VkApigen\Method\Leads;

/**
 * Returns lead stats data.
 */
class GetStats extends \VkApigen\BaseMethod
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
        return $this->onCall('leads.getStats');
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
     * Secret key obtained from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function _secret(string $secret) : self
    {
        $this->params['secret'] = $secret;
        return $this;
    }
    /**
     * Day to start stats from (YYYY_MM_DD, e.g.2011-09-17).
     *
     * {"type":"string"}
     */
    public function _date_start(string $date_start) : self
    {
        $this->params['date_start'] = $date_start;
        return $this;
    }
    /**
     * Day to finish stats (YYYY_MM_DD, e.g.2011-09-17).
     *
     * {"type":"string"}
     */
    public function _date_end(string $date_end) : self
    {
        $this->params['date_end'] = $date_end;
        return $this;
    }
}