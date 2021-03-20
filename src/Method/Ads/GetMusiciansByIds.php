<?php

namespace VkApigen\Method\Ads;

/**
 * Нет описания
 */
class GetMusiciansByIds extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getMusiciansByIds');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":200}
     */
    public function ids(array $ids) : self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}