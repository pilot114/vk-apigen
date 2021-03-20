<?php

namespace VkApigen\Method\Streaming;

/**
 * Нет описания
 */
class SetSettings extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['service']);
    }
    public function call()
    {
        return $this->onCall('streaming.setSettings');
    }
    /**
     * Нет описания
     *
     * {"type":"string","enum":["tier_1","tier_2","tier_3","tier_4","tier_5","tier_6","unlimited"]}
     */
    public function _monthly_tier(string $monthly_tier) : self
    {
        $this->params['monthly_tier'] = $monthly_tier;
        return $this;
    }
}