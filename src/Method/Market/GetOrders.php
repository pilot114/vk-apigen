<?php

namespace VkApigen\Method\Market;

/**
 * Нет описания
 */
class GetOrders extends \VkApigen\BaseMethod
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
        return $this->onCall('market.getOrders');
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
    /**
     * Нет описания
     *
     * {"type":"int","default":10,"minimum":0,"maximum":10}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"bool"}
     */
    public function _extended(bool $extended) : self
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Orders status updated date from (format: yyyy-mm-dd)
     *
     * {"type":"string"}
     */
    public function _date_from(string $date_from) : self
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * Orders status updated date to (format: yyyy-mm-dd)
     *
     * {"type":"string"}
     */
    public function _date_to(string $date_to) : self
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
}