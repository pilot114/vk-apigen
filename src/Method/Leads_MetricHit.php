<?php

namespace VkApigen\Method;

/**
 * Counts the metric event.
 */
class Leads_MetricHit extends \VkApigen\BaseMethod
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
        return $this->onCall('leads.metricHit');
    }
    /**
     * Metric data obtained in the lead interface.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Leads_MetricHit
    {
        $this->params['data'] = $data;
        return $this;
    }
}