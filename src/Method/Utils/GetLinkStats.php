<?php

namespace VkApigen\Method\Utils;

/**
 * Returns stats data for shortened link.
 */
class GetLinkStats extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group', 'service']);
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
    public function key(string $key) : self
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * Source of scope
     *
     * {"type":"string","default":"vk_cc","enum":["vk_cc","vk_link"]}
     */
    public function _source(string $source) : self
    {
        $this->params['source'] = $source;
        return $this;
    }
    /**
     * Access key for private link stats.
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : self
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
    /**
     * Interval.
     *
     * {"type":"string","default":"day","enum":["day","forever","hour","month","week"]}
     */
    public function _interval(string $interval) : self
    {
        $this->params['interval'] = $interval;
        return $this;
    }
    /**
     * Number of intervals to return.
     *
     * {"type":"int","default":1,"minimum":0,"maximum":100}
     */
    public function _intervals_count(int $intervals_count) : self
    {
        $this->params['intervals_count'] = $intervals_count;
        return $this;
    }
    /**
     * 1 — to return extended stats data (sex, age, geo). 0 — to return views number only.
     *
     * {"type":"bool","default":false}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}