<?php

namespace VkApigen\Method;

/**
 * Returns stats data for shortened link.
 */
class Utils_GetLinkStats extends \VkApigen\BaseMethod
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
        return $this->onCall('utils.getLinkStats');
    }
    /**
     * Link key (characters after vk.cc/).
     *
     * {"type":"string"}
     */
    public function key(string $key) : Utils_GetLinkStats
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * Access key for private link stats.
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Utils_GetLinkStats
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
    /**
     * Interval.
     *
     * {"type":"string","enum":["hour","day","week","month","forever"]}
     */
    public function _interval(string $interval) : Utils_GetLinkStats
    {
        $this->params['interval'] = $interval;
        return $this;
    }
    /**
     * Number of intervals to return.
     *
     * {"type":"int","minimum":0,"maximum":100,"default":1}
     */
    public function _intervals_count(int $intervals_count) : Utils_GetLinkStats
    {
        $this->params['intervals_count'] = $intervals_count;
        return $this;
    }
    /**
     * 1 — to return extended stats data (sex, age, geo). 0 — to return views number only.
     *
     * {"type":"bool","default":0}
     */
    public function _extended(bool $extended) : Utils_GetLinkStats
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}