<?php

namespace VkApigen\Method\Adsweb;

/**
 * Нет описания
 */
class GetAdUnits extends \VkApigen\BaseMethod
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
        return $this->onCall('adsweb.getAdUnits');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function office_id(int $office_id) : self
    {
        $this->params['office_id'] = $office_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _sites_ids(string $sites_ids) : self
    {
        $this->params['sites_ids'] = $sites_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _ad_units_ids(string $ad_units_ids) : self
    {
        $this->params['ad_units_ids'] = $ad_units_ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _fields(string $fields) : self
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":null,"minimum":0}
     */
    public function _limit(int $limit) : self
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int","default":0,"minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}