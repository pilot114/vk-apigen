<?php

namespace VkApigen\Method\Leads;

/**
 * Counts the metric event.
 */
class MetricHit extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('leads.metricHit');
    }
    /**
     * Metric data obtained in the lead interface.
     *
     * {"type":"string"}
     */
    public function data(string $data) : self
    {
        $this->params['data'] = $data;
        return $this;
    }
}