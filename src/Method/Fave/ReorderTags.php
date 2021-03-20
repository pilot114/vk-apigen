<?php

namespace VkApigen\Method\Fave;

/**
 * Нет описания
 */
class ReorderTags extends \VkApigen\BaseMethod
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
        return $this->onCall('fave.reorderTags');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function ids(array $ids) : self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}