<?php

namespace VkApigen\Method\Adsweb;

/**
 * Нет описания
 */
class GetAdCategories extends \VkApigen\BaseMethod
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
        return $this->onCall('adsweb.getAdCategories');
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
}