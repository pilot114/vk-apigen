<?php

namespace VkApigen\Method\Stories;

/**
 * Нет описания
 */
class Save extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('stories.save');
    }
    /**
     * Нет описания
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function upload_results(array $upload_results) : self
    {
        $this->params['upload_results'] = $upload_results;
        return $this;
    }
}