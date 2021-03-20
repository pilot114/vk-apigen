<?php

namespace VkApigen\Method\Adsweb;

/**
 * Нет описания
 */
class GetStatistics extends \VkApigen\BaseMethod
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
        return $this->onCall('adsweb.getStatistics');
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
    public function ids_type(string $ids_type) : self
    {
        $this->params['ids_type'] = $ids_type;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function period(string $period) : self
    {
        $this->params['period'] = $period;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function date_from(string $date_from) : self
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function date_to(string $date_to) : self
    {
        $this->params['date_to'] = $date_to;
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
     * {"type":"string"}
     */
    public function _page_id(string $page_id) : self
    {
        $this->params['page_id'] = $page_id;
        return $this;
    }
}