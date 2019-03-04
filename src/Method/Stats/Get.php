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
        parent::__construct($client, $defaultQuery);
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
     * Latest datestamp (in Unix time) of statistics to return.
     *
     * {"type":"string"}
     */
    public function _date_from(string $date_from) : self
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * End datestamp (in Unix time) of statistics to return.
     *
     * {"type":"string"}
     */
    public function _date_to(string $date_to) : self
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
}