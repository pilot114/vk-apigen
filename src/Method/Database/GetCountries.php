<?php

namespace VkApigen\Method\Database;

/**
 * Returns a list of countries.
 */
class GetCountries extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('database.getCountries');
    }
    /**
     * '1' — to return a full list of all countries, '0' — to return a list of countries near the current user's country (default).
     *
     * {"type":"bool"}
     */
    public function _need_all(bool $need_all) : self
    {
        $this->params['need_all'] = $need_all;
        return $this;
    }
    /**
     * Country codes in [vk.com/dev/country_codes|ISO 3166-1 alpha-2] standard.
     *
     * {"type":"string"}
     */
    public function _code(string $code) : self
    {
        $this->params['code'] = $code;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of countries.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : self
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of countries to return.
     *
     * {"type":"int","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(int $count) : self
    {
        $this->params['count'] = $count;
        return $this;
    }
}