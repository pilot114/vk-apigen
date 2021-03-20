<?php

namespace VkApigen\Method\Ads;

/**
 * Нет описания
 */
class GetLookalikeRequests extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getLookalikeRequests');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : self
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : self
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string"}
     */
    public function _requests_ids(string $requests_ids) : self
    {
        $this->params['requests_ids'] = $requests_ids;
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
    /**
     * Нет описания
     *
     * {"type":"int","default":10,"minimum":0,"maximum":200}
     */
    public function _limit(int $limit) : self
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","default":"id"}
     */
    public function _sort_by(string $sort_by) : self
    {
        $this->params['sort_by'] = $sort_by;
        return $this;
    }
}