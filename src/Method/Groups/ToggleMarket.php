<?php

namespace VkApigen\Method\Groups;

/**
 * Нет описания
 */
class ToggleMarket extends \VkApigen\BaseMethod
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
        return $this->onCall('groups.toggleMarket');
    }
    /**
     * Нет описания
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["advanced","basic","none"],"$ref":"objects.json#\/definitions\/groups_market_state"}
     */
    public function state(string $state) : self
    {
        $this->params['state'] = $state;
        return $this;
    }
}