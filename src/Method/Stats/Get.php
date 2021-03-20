<?php

namespace VkApigen\Method\Stats;

/**
 * Returns statistics of a community or an application.
 */
class Get extends \VkApigen\BaseMethod
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
        return $this->onCall('stats.get');
    }
    /**
     * Community ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Application ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _app_id(int $app_id) : self
    {
        $this->params['app_id'] = $app_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _timestamp_from(int $timestamp_from) : self
    {
        $this->params['timestamp_from'] = $timestamp_from;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _timestamp_to(int $timestamp_to) : self
    {
        $this->params['timestamp_to'] = $timestamp_to;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"day","enum":["all","day","month","week","year"]}
     */
    public function _interval(string $interval) : self
    {
        $this->params['interval'] = $interval;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function _intervals_count(int $intervals_count) : self
    {
        $this->params['intervals_count'] = $intervals_count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $filters) : self
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _stats_groups(array $stats_groups) : self
    {
        $this->params['stats_groups'] = $stats_groups;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool","default":true}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}