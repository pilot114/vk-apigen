<?php

namespace VkApigen\Method\Database;

/**
 * Get metro station by his id
 */
class GetMetroStationsById extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'service']);
    }
    public function call()
    {
        return $this->onCall('database.getMetroStationsById');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":30}
     */
    public function _station_ids(array $station_ids) : self
    {
        $this->params['station_ids'] = $station_ids;
        return $this;
    }
}