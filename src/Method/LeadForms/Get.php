<?php

namespace VkApigen\Method\LeadForms;

/**
 * Нет описания
 */
class Get extends \VkApigen\BaseMethod
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
        return $this->onCall('leadForms.get');
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Нет описания
     *
     * {"type":"int"}
     */
    public function form_id(int $form_id) : self
    {
        $this->params['form_id'] = $form_id;
        return $this;
    }
}